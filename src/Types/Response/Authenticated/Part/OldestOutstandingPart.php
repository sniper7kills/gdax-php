<?php

namespace GDAX\Types\Response\Authenticated\Part;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class OldestOutstandingPart
 *
 * @author Benjamin Franke
 */
class OldestOutstandingPart implements ResponseTypeInterface {

    use ResponseTypeTrait;

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $order_id;

    /**
     * @var \DateTime
     */
    protected $created_at;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var string
     */
    protected $account_id;

    /**
     * @var float
     */
    protected $amount;

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return OldestOutstandingPart
     */
    protected function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderId() {
        return $this->order_id;
    }

    /**
     * @param string $order_id
     *
     * @return OldestOutstandingPart
     */
    protected function setOrderId($order_id) {
        $this->order_id = $order_id;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt() {
        return $this->created_at;
    }

    /**
     * @param \DateTime $created_at
     *
     * @return OldestOutstandingPart
     */
    protected function setCreatedAt($created_at) {
        $this->created_at = new \DateTime($created_at);
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
     * @return OldestOutstandingPart
     */
    protected function setCurrency($currency) {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountId() {
        return $this->account_id;
    }

    /**
     * @param string $account_id
     *
     * @return OldestOutstandingPart
     */
    protected function setAccountId($account_id) {
        $this->account_id = $account_id;
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
     * @return OldestOutstandingPart
     */
    protected function setAmount($amount) {
        $this->amount = (float)$amount;
        return $this;
    }

}
