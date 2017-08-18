<?php

namespace GDAX\Types\Response\Authenticated;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class Withdrawal
 *
 * @author Benjamin Franke
 */
class Withdrawal implements ResponseTypeInterface {

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
    protected $coinbase_account_id;

    /**
     * @var string
     */
    protected $crypto_address;

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
     * @return Withdrawal
     */
    protected function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getAmount() {
        return $this->amount;
    }

    /**
     * @param float $amount
     *
     * @return Withdrawal
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
     * @return Withdrawal
     */
    protected function setCurrency($currency) {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getCoinbaseAccountId() {
        return $this->coinbase_account_id;
    }

    /**
     * @param string $coinbase_account_id
     *
     * @return Withdrawal
     */
    protected function setCoinbaseAccountId($coinbase_account_id) {
        $this->coinbase_account_id = $coinbase_account_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCryptoAddress() {
        return $this->crypto_address;
    }

    /**
     * @param string $crypto_address
     *
     * @return Withdrawal
     */
    protected function setCryptoAddress($crypto_address) {
        $this->crypto_address = $crypto_address;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayoutAt() {
        return $this->payout_at;
    }

    /**
     * @param \DateTime $payout_at
     *
     * @return Withdrawal
     */
    protected function setPayoutAt($payout_at) {
        $this->payout_at = new \DateTime($payout_at);
        return $this;
    }

}
