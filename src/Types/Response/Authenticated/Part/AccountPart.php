<?php

namespace GDAX\Types\Response\Authenticated\Part;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class AccountPart
 *
 * @author Benjamin Franke
 */
class AccountPart implements ResponseTypeInterface {

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
    protected $hold;

    /**
     * @var float
     */
    protected $funded_amount;

    /**
     * @var float
     */
    protected $default_amount;

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return AccountPart
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
     * @return AccountPart
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
     * @return AccountPart
     */
    protected function setBalance($balance) {
        $this->balance = (float)$balance;
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
     * @return AccountPart
     */
    protected function setHold($hold) {
        $this->hold = (float)$hold;
        return $this;
    }

    /**
     * @return float
     */
    public function getFundedAmount() {
        return $this->funded_amount;
    }

    /**
     * @param float $funded_amount
     *
     * @return AccountPart
     */
    protected function setFundedAmount($funded_amount) {
        $this->funded_amount = (float)$funded_amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getDefaultAmount() {
        return $this->default_amount;
    }

    /**
     * @param float $default_amount
     *
     * @return AccountPart
     */
    protected function setDefaultAmount($default_amount) {
        $this->default_amount = (float)$default_amount;
        return $this;
    }

}
