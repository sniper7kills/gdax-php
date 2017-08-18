<?php

namespace GDAX\Clients;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Security\Auth;
use GDAX\Security\RequestSigner;
use GDAX\Types\Request\Authenticated\Account as RequestAccount;
use GDAX\Types\Request\Authenticated\AccountPaginated as RequestAccountPaginated;
use GDAX\Types\Request\Authenticated\Deposit as RequestDeposit;
use GDAX\Types\Request\Authenticated\Fill as RequestFill;
use GDAX\Types\Request\Authenticated\Funding as RequestFunding;
use GDAX\Types\Request\Authenticated\ListOrders as RequestListOrders;
use GDAX\Types\Request\Authenticated\MarginTransfer as RequestMarginTransfer;
use GDAX\Types\Request\Authenticated\Order as RequestOrder;
use GDAX\Types\Request\Authenticated\Position as RequestPosition;
use GDAX\Types\Request\Authenticated\Report as RequestReport;
use GDAX\Types\Request\Authenticated\Withdrawal as RequestWithdrawal;
use GDAX\Types\Response\Authenticated\Account as ResponseAccount;
use GDAX\Types\Response\Authenticated\CoinbaseAccount as ResponseCoinbaseAccount;
use GDAX\Types\Response\Authenticated\Deposit as ResponseDeposit;
use GDAX\Types\Response\Authenticated\Fill as ResponseFill;
use GDAX\Types\Response\Authenticated\Funding as ResponseFunding;
use GDAX\Types\Response\Authenticated\Hold as ResponseHold;
use GDAX\Types\Response\Authenticated\Ledger as ResponseLedger;
use GDAX\Types\Response\Authenticated\MarginTransfer as ResponseMarginTransfer;
use GDAX\Types\Response\Authenticated\Order as ResponseOrder;
use GDAX\Types\Response\Authenticated\PaymentMethods as ResponsePaymentMethods;
use GDAX\Types\Response\Authenticated\Position as ResponsePosition;
use GDAX\Types\Response\Authenticated\Report as ResponseReport;
use GDAX\Types\Response\Authenticated\TrailingVolume as ResponseTrailingVolume;
use GDAX\Types\Response\Authenticated\Withdrawal as ResponseWithdrawal;
use GDAX\Types\Response\RawData;

/**
 * Class AuthenticatedClient
 *
 * @author Benjamin Franke
 */
class AuthenticatedClient extends PublicClient {

    /**
     * @var string
     */
    protected $key;

    /**
     * @var string
     */
    protected $b64secret;

    /**
     * @var string
     */
    protected $passphrase;

    /**
     * @var Auth
     */
    protected $auth;

    /**
     * AuthenticatedClient constructor.
     *
     * @param string $key
     * @param string $b64secret
     * @param string $passphrase
     */
    public function __construct($key, $b64secret, $passphrase) {
        $this->setAuth(new Auth($key, $b64secret, $passphrase));
    }

    /**
     * @param string $method
     * @param array  $uriParts
     * @param array  $options
     * @param array  $headers
     *
     * @return array
     */
    public function request($method, array $uriParts, array $options = [], array $headers = []) {

        $requestSigner = new RequestSigner($this->getAuth(), $method, $uriParts, $options);
        $headers += $requestSigner->getHeaders();

        return parent::request($method, $uriParts, $options, $headers);

    }

    /**
     * @return Auth
     */
    public function getAuth() {
        return $this->auth;
    }

    /**
     * @param Auth $auth
     *
     * @return AuthenticatedClient
     */
    public function setAuth(Auth $auth) {
        $this->auth = $auth;
        return $this;
    }

    /**
     * Get a list of trading accounts.
     *
     * @return ResponseTypeInterface
     */
    public function getAccounts() {
        return $this->get(['accounts'], ResponseAccount::class);
    }

    /**
     * Information for a single account. Use this endpoint when you know the account_id.
     *
     * @param RequestAccount $account
     *
     * @return ResponseTypeInterface
     */
    public function getAccount(RequestAccount $account) {
        return $this->get(['accounts', $account->getId()], ResponseAccount::class);
    }

    /**
     * List account activity. Account activity either increases or decreases your account balance.
     * Items are paginated and sorted latest first.
     * See the Pagination section for retrieving additional entries after the first page.
     *
     * @param RequestAccountPaginated $account
     *
     * @return ResponseTypeInterface
     */
    public function getAccountHistory(RequestAccountPaginated $account) {
        return $this->get(['accounts', $account->getId(), 'ledger'], ResponseLedger::class, $account->toArray());
    }

    /**
     * Holds are placed on an account for any active orders or pending withdraw requests.
     * As an order is filled, the hold amount is updated.
     * If an order is canceled, any remaining hold is removed.
     * For a withdraw, once it is completed, the hold is removed.
     *
     * @param RequestAccountPaginated $account
     *
     * @return ResponseTypeInterface
     */
    public function getAccountHolds(RequestAccountPaginated $account) {
        return $this->get(['accounts', $account->getId(), 'holds'], ResponseHold::class, $account->toArray());
    }

    /**
     * Place a New Order
     *
     * You can place different types of orders: limit, market, and stop.
     * Orders can only be placed if your account has sufficient funds.
     * Once an order is placed, your account funds will be put on hold for the duration of the order.
     * How much and which funds are put on hold depends on the order type and parameters specified.
     *
     * @param RequestOrder $order
     *
     * @return ResponseTypeInterface
     */
    public function placeOrder(RequestOrder $order) {
        return $this->post(['orders'], ResponseOrder::class, $order->toArray());
    }

    /**
     * Cancel an Order
     *
     * Cancel a previously placed order.
     * If the order had no matches during its lifetime its record may be purged.
     * This means the order details will not be available with GET /orders/<order-id>.
     *
     * @param RequestOrder $order
     *
     * @return ResponseTypeInterface
     */
    public function cancelOrder(RequestOrder $order) {
        return $this->delete(['orders', $order->getId()], RawData::class);
    }

    /**
     * Cancel all
     *
     * With best effort, cancel all open orders. The response is a list of ids of the canceled orders.
     *
     * @param RequestOrder|null $order
     *
     * @return ResponseTypeInterface
     */
    public function cancelOrders(RequestOrder $order = null) {
        return $this->delete(['orders'], RawData::class, ($order !== null) ? $order->toArray() : []);
    }

    /**
     * List your current open orders. Only open or un-settled orders are returned.
     * As soon as an order is no longer open and settled, it will no longer appear in the default request.
     *
     * @param RequestListOrders $listOrders
     *
     * @return ResponseTypeInterface
     */
    public function getOrders(RequestListOrders $listOrders) {
        return $this->get(['orders'], ResponseOrder::class, $listOrders->toArray());
    }

    /**
     * Get a single order by order id.
     *
     * @param RequestOrder $order
     *
     * @return ResponseTypeInterface
     */
    public function getOrder(RequestOrder $order) {
        return $this->get(['orders', $order->getId()], ResponseOrder::class);
    }

    /**
     * Get a list of recent fills.
     *
     * @param RequestFill $fill
     *
     * @return ResponseTypeInterface
     */
    public function getFills(RequestFill $fill = null) {
        return $this->get(['fills'], ResponseFill::class, ($fill !== null) ? $fill->toArray() : []);
    }

    /**
     * List Fundings
     *
     * @param RequestFunding $funding
     *
     * @return ResponseTypeInterface
     */
    public function getFundings(RequestFunding $funding = null) {
        return $this->get(['funding'], ResponseFunding::class, ($funding !== null) ? $funding->toArray() : []);
    }

    /**
     * Repay funding. Repays the older funding records first.
     *
     * @param RequestFunding $funding
     *
     * @return ResponseTypeInterface
     */
    public function repay(RequestFunding $funding) {
        return $this->post(['funding', 'repay'], RawData::class, $funding->toArray());
    }

    /**
     * Margin Transfer
     *
     * Transfer funds between your standard/default profile and a margin profile.
     * A deposit will transfer funds from the default profile into the margin profile.
     * A withdraw will transfer funds from the margin profile to the default profile.
     * Withdraws will fail if they would set your margin ratio below the initial margin ratio requirement.
     *
     * @param RequestMarginTransfer $marginTransfer
     *
     * @return ResponseTypeInterface
     */
    public function marginTransfer(RequestMarginTransfer $marginTransfer) {
        return $this->post(['profiles', 'margin-transfer'], ResponseMarginTransfer::class, $marginTransfer->toArray());
    }

    /**
     * An overview of your profile.
     *
     * @return ResponseTypeInterface
     */
    public function getPosition() {
        return $this->get(['position'], ResponsePosition::class);
    }

    /**
     * Close position
     *
     * @param RequestPosition $position
     *
     * @return ResponseTypeInterface
     */
    public function closePosition(RequestPosition $position) {
        return $this->post(['position', 'close'], RawData::class, $position->toArray());
    }

    /**
     * Deposit funds from a payment method. See the Payment Methods section for retrieving your payment methods.
     *
     * @param RequestDeposit $deposit
     *
     * @return ResponseTypeInterface
     */
    public function depositPaymentMethod(RequestDeposit $deposit) {
        return $this->post(['deposits', 'payment-method'], ResponseDeposit::class, $deposit->toArray());
    }

    /**
     * Deposit funds from a coinbase account.
     * You can move funds between your Coinbase accounts and your GDAX trading accounts within your daily limits.
     * Moving funds between Coinbase and GDAX is instant and free.
     * See the Coinbase Accounts section for retrieving your Coinbase accounts.
     *
     * @param RequestDeposit $deposit
     *
     * @return ResponseTypeInterface
     */
    public function depositCoinbase(RequestDeposit $deposit) {
        return $this->post(['deposits', 'coinbase-account'], ResponseDeposit::class, $deposit->toArray());
    }

    /**
     * Withdraw funds to a payment method. See the Payment Methods section for retrieving your payment methods.
     *
     * @param RequestWithdrawal $withdrawal
     *
     * @return ResponseTypeInterface
     */
    public function withdrawPaymentMethod(RequestWithdrawal $withdrawal) {
        return $this->post(['withdrawals', 'payment-method'], ResponseDeposit::class, $withdrawal->toArray());
    }

    /**
     * Withdraw funds to a coinbase account.
     * You can move funds between your Coinbase accounts and your GDAX trading accounts within your daily limits.
     * Moving funds between Coinbase and GDAX is instant and free.
     * See the Coinbase Accounts section for retrieving your Coinbase accounts.
     *
     * @param RequestWithdrawal $withdrawal
     *
     * @return ResponseTypeInterface
     */
    public function withdrawCoinbase(RequestWithdrawal $withdrawal) {
        return $this->post(['withdrawals', 'coinbase'], ResponseWithdrawal::class, $withdrawal->toArray());
    }

    /**
     * Withdraws funds to a crypto address.
     *
     * @param RequestWithdrawal $withdrawal
     *
     * @return ResponseTypeInterface
     */
    public function withdrawCrypto(RequestWithdrawal $withdrawal) {
        return $this->post(['withdrawals', 'crypto'], ResponseWithdrawal::class, $withdrawal->toArray());
    }

    /**
     * Get a list of your payment methods.
     *
     * @return ResponseTypeInterface
     */
    public function getPaymentMethods() {
        return $this->get(['payment-methods'], ResponsePaymentMethods::class);
    }

    /**
     * Get a list of your coinbase accounts.
     * Visit the Coinbase accounts API for more information.
     *
     * @return ResponseTypeInterface
     */
    public function getCoinbaseAccounts() {
        return $this->get(['coinbase-accounts'], ResponseCoinbaseAccount::class);
    }

    /**
     * @return ResponseTypeInterface
     */
    public function getReports() {
        return $this->get(['reports'], ResponseReport::class);
    }

    /**
     * Reports provide batches of historic information about your account in various human and machine readable forms.
     *
     * @param RequestReport $report
     *
     * @return ResponseTypeInterface
     */
    public function getReport(RequestReport $report) {
        return $this->get(['reports', $report->getId()], ResponseReport::class);
    }

    /**
     * This request will return your 30-day trailing volume for all products.
     * This is a cached value that’s calculated every day at midnight UTC.
     *
     * @return ResponseTypeInterface
     */
    public function getTrailingVolume() {
        return $this->get(['users', 'self', 'trailing-volume'], ResponseTrailingVolume::class);
    }

}
