<?php

namespace GDAX\Types\Response\Authenticated;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class Account
 *
 * @author Benjamin Franke
 */
class Account implements ResponseTypeInterface {

    use ResponseTypeTrait;

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var float
     */
    protected $balance;

    /**
     * @var float
     */
    protected $available;

    /**
     * @var float
     */
    protected $hold;

    /**
     * @var string
     */
    protected $profile_id;

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return Account
     */
    protected function setId($id) {
        $this->id = $id;
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
     * @return Account
     */
    protected function setCurrency($currency) {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return float
     */
    public function getBalance() {
        return $this->balance;
    }

    /**
     * @param float $balance
     *
     * @return Account
     */
    protected function setBalance($balance) {
        $this->balance = (float)$balance;
        return $this;
    }

    /**
     * @return float
     */
    public function getAvailable() {
        return $this->available;
    }

    /**
     * @param float $available
     *
     * @return Account
     */
    protected function setAvailable($available) {
        $this->available = (float)$available;
        return $this;
    }

    /**
     * @return float
     */
    public function getHold() {
        return $this->hold;
    }

    /**
     * @param float $hold
     *
     * @return Account
     */
    protected function setHold($hold) {
        $this->hold = (float)$hold;
        return $this;
    }

    /**
     * @return string
     */
    public function getProfileId() {
        return $this->profile_id;
    }

    /**
     * @param string $profile_id
     *
     * @return Account
     */
    protected function setProfileId($profile_id) {
        $this->profile_id = $profile_id;
        return $this;
    }

}
