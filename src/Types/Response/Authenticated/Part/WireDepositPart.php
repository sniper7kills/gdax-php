<?php

namespace GDAX\Types\Response\Authenticated\Part;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class WireDepositPart
 *
 * @author Benjamin Franke
 */
class WireDepositPart implements ResponseTypeInterface {

    use ResponseTypeTrait {
        initFromArray as protected traitInitFromArray;
    }

    /**
     * @var string
     */
    protected $account_number;

    /**
     * @var string
     */
    protected $routing_number;

    /**
     * @var string
     */
    protected $bank_name;

    /**
     * @var string
     */
    protected $bank_address;

    /**
     * @var BankCountryPart
     */
    protected $bank_country;

    /**
     * @var string
     */
    protected $account_name;

    /**
     * @var string
     */
    protected $account_address;

    /**
     * @var string
     */
    protected $reference;

    /**
     * @return string
     */
    public function getAccountNumber() {
        return $this->account_number;
    }

    /**
     * @param string $account_number
     *
     * @return WireDepositPart
     */
    protected function setAccountNumber($account_number) {
        $this->account_number = $account_number;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoutingNumber() {
        return $this->routing_number;
    }

    /**
     * @param string $routing_number
     *
     * @return WireDepositPart
     */
    protected function setRoutingNumber($routing_number) {
        $this->routing_number = $routing_number;
        return $this;
    }

    /**
     * @return string
     */
    public function getBankName() {
        return $this->bank_name;
    }

    /**
     * @param string $bank_name
     *
     * @return WireDepositPart
     */
    protected function setBankName($bank_name) {
        $this->bank_name = $bank_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getBankAddress() {
        return $this->bank_address;
    }

    /**
     * @param string $bank_address
     *
     * @return WireDepositPart
     */
    protected function setBankAddress($bank_address) {
        $this->bank_address = $bank_address;
        return $this;
    }

    /**
     * @return BankCountryPart
     */
    public function getBankCountry() {
        return $this->bank_country;
    }

    /**
     * @param BankCountryPart $bank_country
     *
     * @return WireDepositPart
     */
    protected function setBankCountry($bank_country) {
        $this->bank_country = $bank_country;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountName() {
        return $this->account_name;
    }

    /**
     * @param string $account_name
     *
     * @return WireDepositPart
     */
    protected function setAccountName($account_name) {
        $this->account_name = $account_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountAddress() {
        return $this->account_address;
    }

    /**
     * @param string $account_address
     *
     * @return WireDepositPart
     */
    protected function setAccountAddress($account_address) {
        $this->account_address = $account_address;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference() {
        return $this->reference;
    }

    /**
     * @param string $reference
     *
     * @return WireDepositPart
     */
    protected function setReference($reference) {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @param array $data
     *
     * @return $this
     */
    public function initFromArray(array $data) {

        $this->traitInitFromArray($data);

        $this->setBankCountry((new BankCountryPart())->initFromArray($data['bank_country']));

        return $this;

    }

}
