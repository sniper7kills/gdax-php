<?php

namespace GDAX\Types\Response\Authenticated;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class MarginTransfer
 *
 * @author Benjamin Franke
 */
class MarginTransfer implements ResponseTypeInterface {

    use ResponseTypeTrait;

    /**
     * @var \DateTime
     */
    protected $created_at;

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $user_id;

    /**
     * @var string
     */
    protected $profile_id;

    /**
     * @var string
     */
    protected $margin_profile_id;

    /**
     * @var string
     */
    protected $type;

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
    protected $account_id;

    /**
     * @var string
     */
    protected $margin_account_id;

    /**
     * @var string
     */
    protected $margin_product_id;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var int
     */
    protected $nonce;

    /**
     * @return \DateTime
     */
    public function getCreatedAt() {
        return $this->created_at;
    }

    /**
     * @param string $created_at
     *
     * @return MarginTransfer
     */
    protected function setCreatedAt($created_at) {
        $this->created_at = new \DateTime($created_at);
        return $this;
    }

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return MarginTransfer
     */
    protected function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserId() {
        return $this->user_id;
    }

    /**
     * @param string $user_id
     *
     * @return MarginTransfer
     */
    protected function setUserId($user_id) {
        $this->user_id = $user_id;
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
     * @return MarginTransfer
     */
    protected function setProfileId($profile_id) {
        $this->profile_id = $profile_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getMarginProfileId() {
        return $this->margin_profile_id;
    }

    /**
     * @param string $margin_profile_id
     *
     * @return MarginTransfer
     */
    protected function setMarginProfileId($margin_profile_id) {
        $this->margin_profile_id = $margin_profile_id;
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
     * @return MarginTransfer
     */
    protected function setType($type) {
        $this->type = $type;
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
     * @return MarginTransfer
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
     * @return MarginTransfer
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
     * @return MarginTransfer
     */
    protected function setAccountId($account_id) {
        $this->account_id = $account_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getMarginAccountId() {
        return $this->margin_account_id;
    }

    /**
     * @param string $margin_account_id
     *
     * @return MarginTransfer
     */
    protected function setMarginAccountId($margin_account_id) {
        $this->margin_account_id = $margin_account_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getMarginProductId() {
        return $this->margin_product_id;
    }

    /**
     * @param string $margin_product_id
     *
     * @return MarginTransfer
     */
    protected function setMarginProductId($margin_product_id) {
        $this->margin_product_id = $margin_product_id;
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
     * @return MarginTransfer
     */
    protected function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * @return int
     */
    public function getNonce() {
        return $this->nonce;
    }

    /**
     * @param int $nonce
     *
     * @return MarginTransfer
     */
    protected function setNonce($nonce) {
        $this->nonce = (int)$nonce;
        return $this;
    }

}
