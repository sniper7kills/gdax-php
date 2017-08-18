<?php

namespace GDAX\Types\Response\Authenticated;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class Funding
 *
 * @author Benjamin Franke
 */
class Funding implements ResponseTypeInterface {

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
     * @var string
     */
    protected $profile_id;

    /**
     * @var float
     */
    protected $amount;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var \DateTime
     */
    protected $created_at;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var float
     */
    protected $repaid_amount;

    /**
     * @var float
     */
    protected $default_amount;

    /**
     * @var bool
     */
    protected $repaid_default;

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return Funding
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
     * @return Funding
     */
    protected function setOrderId($order_id) {
        $this->order_id = $order_id;
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
     * @return Funding
     */
    protected function setProfileId($profile_id) {
        $this->profile_id = $profile_id;
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
     * @return Funding
     */
    protected function setAmount($amount) {
        $this->amount = (float)$amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return Funding
     */
    protected function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt() {
        return $this->created_at;
    }

    /**
     * @param string $created_at
     *
     * @return Funding
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
     * @return Funding
     */
    protected function setCurrency($currency) {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return float
     */
    public function getRepaidAmount() {
        return $this->repaid_amount;
    }

    /**
     * @param float $repaid_amount
     *
     * @return Funding
     */
    protected function setRepaidAmount($repaid_amount) {
        $this->repaid_amount = (float)$repaid_amount;
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
     * @return Funding
     */
    protected function setDefaultAmount($default_amount) {
        $this->default_amount = (float)$default_amount;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRepaidDefault() {
        return $this->repaid_default;
    }

    /**
     * @param bool $repaid_default
     *
     * @return Funding
     */
    protected function setRepaidDefault($repaid_default) {
        $this->repaid_default = (bool)$repaid_default;
        return $this;
    }

}
