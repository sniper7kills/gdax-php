<?php

namespace GDAX\Types\Response\Authenticated;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class PaymentMethods
 *
 * @author Benjamin Franke
 */
class PaymentMethods implements ResponseTypeInterface {

    use ResponseTypeTrait;

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var bool
     */
    protected $primary_buy;

    /**
     * @var bool
     */
    protected $primary_sell;

    /**
     * @var bool
     */
    protected $allow_buy;

    /**
     * @var bool
     */
    protected $allow_sell;

    /**
     * @var bool
     */
    protected $allow_deposit;

    /**
     * @var bool
     */
    protected $allow_withdraw;

    /**
     * @var array
     * TODO: Implement this
     */
    protected $limits;

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return PaymentMethods
     */
    protected function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return PaymentMethods
     */
    protected function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return PaymentMethods
     */
    protected function setName($name) {
        $this->name = $name;
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
     * @return PaymentMethods
     */
    protected function setCurrency($currency) {
        $this->currency = (string)$currency;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPrimaryBuy() {
        return $this->primary_buy;
    }

    /**
     * @param bool $primary_buy
     *
     * @return PaymentMethods
     */
    protected function setPrimaryBuy($primary_buy) {
        $this->primary_buy = (bool)$primary_buy;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPrimarySell() {
        return $this->primary_sell;
    }

    /**
     * @param bool $primary_sell
     *
     * @return PaymentMethods
     */
    protected function setPrimarySell($primary_sell) {
        $this->primary_sell = (bool)$primary_sell;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAllowBuy() {
        return $this->allow_buy;
    }

    /**
     * @param bool $allow_buy
     *
     * @return PaymentMethods
     */
    protected function setAllowBuy($allow_buy) {
        $this->allow_buy = (bool)$allow_buy;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAllowSell() {
        return $this->allow_sell;
    }

    /**
     * @param bool $allow_sell
     *
     * @return PaymentMethods
     */
    protected function setAllowSell($allow_sell) {
        $this->allow_sell = (bool)$allow_sell;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAllowDeposit() {
        return $this->allow_deposit;
    }

    /**
     * @param bool $allow_deposit
     *
     * @return PaymentMethods
     */
    protected function setAllowDeposit($allow_deposit) {
        $this->allow_deposit = (bool)$allow_deposit;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAllowWithdraw() {
        return $this->allow_withdraw;
    }

    /**
     * @param bool $allow_withdraw
     *
     * @return PaymentMethods
     */
    protected function setAllowWithdraw($allow_withdraw) {
        $this->allow_withdraw = (bool)$allow_withdraw;
        return $this;
    }

    /**
     * @return array
     */
    public function getLimits() {
        return $this->limits;
    }

    /**
     * @param array $limits
     *
     * @return PaymentMethods
     */
    protected function setLimits($limits) {
        $this->limits = $limits;
        return $this;
    }

}
