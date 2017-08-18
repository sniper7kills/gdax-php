<?php

namespace GDAX\Types\Response\Authenticated;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;
use GDAX\Types\Response\Authenticated\Part\SepaDepositPart;
use GDAX\Types\Response\Authenticated\Part\WireDepositPart;

/**
 * Class CoinbaseAccount
 *
 * @author Benjamin Franke
 */
class CoinbaseAccount implements ResponseTypeInterface {

    use ResponseTypeTrait {
        initFromArray as protected traitInitFromArray;
    }

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var float
     */
    protected $balance;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var bool
     */
    protected $primary;

    /**
     * @var bool
     */
    protected $active;

    /**
     * @var WireDepositPart
     */
    protected $wireDeposit;

    /**
     * @var SepaDepositPart
     */
    protected $sepaDeposit;

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return CoinbaseAccount
     */
    protected function setId($id) {
        $this->id = $id;
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
     * @return CoinbaseAccount
     */
    protected function setName($name) {
        $this->name = $name;
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
     * @return CoinbaseAccount
     */
    protected function setBalance($balance) {
        $this->balance = $balance;
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
     * @return CoinbaseAccount
     */
    protected function setCurrency($currency) {
        $this->currency = $currency;
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
     * @return CoinbaseAccount
     */
    protected function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPrimary() {
        return $this->primary;
    }

    /**
     * @param bool $primary
     *
     * @return CoinbaseAccount
     */
    protected function setPrimary($primary) {
        $this->primary = $primary;
        return $this;
    }

    /**
     * @return bool
     */
    public function isActive() {
        return $this->active;
    }

    /**
     * @param bool $active
     *
     * @return CoinbaseAccount
     */
    protected function setActive($active) {
        $this->active = (bool)$active;
        return $this;
    }

    /**
     * @return WireDepositPart
     */
    public function getWireDeposit() {
        return $this->wireDeposit;
    }

    /**
     * @param WireDepositPart $wireDeposit
     *
     * @return CoinbaseAccount
     */
    protected function setWireDeposit($wireDeposit) {
        $this->wireDeposit = $wireDeposit;
        return $this;
    }

    /**
     * @return SepaDepositPart
     */
    public function getSepaDeposit() {
        return $this->sepaDeposit;
    }

    /**
     * @param SepaDepositPart $sepaDeposit
     *
     * @return CoinbaseAccount
     */
    protected function setSepaDeposit($sepaDeposit) {
        $this->sepaDeposit = $sepaDeposit;
        return $this;
    }

    /**
     * @param array $data
     *
     * @return $this
     */
    public function initFromArray(array $data) {

        $this->traitInitFromArray($data);

        if (!empty($data['wire_transfer'])) {
            $this->setWireDeposit((new WireDepositPart())->initFromArray($data['wire_transfer']));
        }

        if (!empty($data['sepa_deposit_information'])) {
            $this->setSepaDeposit((new SepaDepositPart())->initFromArray($data['sepa_deposit_information']));
        }

        return $this;

    }

}
