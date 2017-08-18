<?php

namespace GDAX\Types\Response\Authenticated;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;
use GDAX\Types\Response\Authenticated\Part\LedgerDetailsPart;

/**
 * Class Ledger
 *
 * @author Benjamin Franke
 */
class Ledger implements ResponseTypeInterface {

    use ResponseTypeTrait {
        initFromArray as protected traitInitFromArray;
    }

    /**
     * @var string
     */
    protected $id;

    /**
     * @var \DateTime
     */
    protected $created_at;

    /**
     * @var float
     */
    protected $amount;

    /**
     * @var float
     */
    protected $balance;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var LedgerDetailsPart
     */
    protected $details;

    /**
     * @param array $data
     *
     * @return $this
     */
    public function initFromArray(array $data) {

        $this->traitInitFromArray($data);

        if (!empty($data['details'])) {
            $this->setDetails((new LedgerDetailsPart())->initFromArray($data['details']));
        }

        return $this;

    }

    /**
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return Ledger
     */
    protected function setId($id) {
        $this->id = (int)$id;
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
     * @return Ledger
     */
    protected function setCreatedAt($created_at) {
        $this->created_at = new \DateTime($created_at);
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
     * @return Ledger
     */
    protected function setAmount($amount) {
        $this->amount = (float)$amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getBalance() {
        return $this->balance;
    }

    /**
     * @param float $balance
     *
     * @return Ledger
     */
    protected function setBalance($balance) {
        $this->balance = (float)$balance;
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
     * @return Ledger
     */
    protected function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * @return LedgerDetailsPart
     */
    public function getDetails() {
        return $this->details;
    }

    /**
     * @param LedgerDetailsPart $details
     *
     * @return Ledger
     */
    protected function setDetails($details) {
        $this->details = $details;
        return $this;
    }

}
