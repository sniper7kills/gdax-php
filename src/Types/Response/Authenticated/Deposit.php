<?php

namespace GDAX\Types\Response\Authenticated;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class Deposit
 *
 * @author Benjamin Franke
 */
class Deposit implements ResponseTypeInterface {

    use ResponseTypeTrait;

    /**
     * @var string
     */
    protected $id;

    /**
     * @var float
     */
    protected $amount;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var string
     */
    protected $payment_method_id;

    /**
     * @var string
     */
    protected $coinbase_account_id;

    /**
     * @var \DateTime
     */
    protected $payout_at;

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return Deposit
     */
    protected function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount() {
        return $this->amount;
    }

    /**
     * @param float $amount
     *
     * @return Deposit
     */
    protected function setAmount($amount) {
        $this->amount = (float)$amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency() {
        return $this->currency;
    }

    /**
     * @param string $currency
     *
     * @return Deposit
     */
    protected function setCurrency($currency) {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethodId() {
        return $this->payment_method_id;
    }

    /**
     * @param $payment_method_id
     *
     * @return Deposit
     */
    protected function setPaymentMethodId($payment_method_id) {
        $this->payment_method_id = $payment_method_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCoinbaseAccountId() {
        return $this->coinbase_account_id;
    }

    /**
     * @param $coinbase_account_id
     *
     * @return Deposit
     */
    protected function setCoinbaseAccountId($coinbase_account_id) {
        $this->coinbase_account_id = $coinbase_account_id;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPayoutAt() {
        return $this->payout_at;
    }

    /**
     * @param string $payout_at
     *
     * @return Deposit
     */
    protected function setPayoutAt($payout_at) {
        $this->payout_at = new \DateTime($payout_at);
        return $this;
    }

}
