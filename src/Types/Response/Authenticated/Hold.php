<?php

namespace GDAX\Types\Response\Authenticated;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class Hold
 *
 * @author Benjamin Franke
 */
class Hold implements ResponseTypeInterface {

    use ResponseTypeTrait;

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $account_id;

    /**
     * @var \DateTime
     */
    protected $created_at;

    /**
     * @var \DateTime
     */
    protected $updated_at;

    /**
     * @var float
     */
    protected $amount;

    /**
     * @var float
     */
    protected $type;

    /**
     * @var string
     */
    protected $ref;

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return Hold
     */
    protected function setId($id) {
        $this->id = $id;
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
     * @return Hold
     */
    protected function setAccountId($account_id) {
        $this->account_id = $account_id;
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
     * @return Hold
     */
    protected function setCreatedAt($created_at) {
        $this->created_at = new \DateTime($created_at);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt() {
        return $this->updated_at;
    }

    /**
     * @param string $updated_at
     *
     * @return Hold
     */
    protected function setUpdatedAt($updated_at) {
        $this->updated_at = new \DateTime($updated_at);
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
     * @return Hold
     */
    protected function setAmount($amount) {
        $this->amount = (float)$amount;
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
     * @return Hold
     */
    protected function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getRef() {
        return $this->ref;
    }

    /**
     * @param string $ref
     *
     * @return Hold
     */
    protected function setRef($ref) {
        $this->ref = $ref;
        return $this;
    }

}
