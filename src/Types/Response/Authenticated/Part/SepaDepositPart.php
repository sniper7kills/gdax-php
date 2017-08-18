<?php

namespace GDAX\Types\Response\Authenticated\Part;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class SepaDepositPart
 *
 * @author Benjamin Franke
 */
class SepaDepositPart implements ResponseTypeInterface {

    use ResponseTypeTrait;

    /**
     * @var string
     */
    protected $iban;

    /**
     * @var string
     */
    protected $swift;

    /**
     * @var string
     */
    protected $bank_name;

    /**
     * @var string
     */
    protected $bank_address;

    /**
     * @var string
     */
    protected $bank_country_name;

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
    public function getIban() {
        return $this->iban;
    }

    /**
     * @param string $iban
     *
     * @return SepaDepositPart
     */
    protected function setIban($iban) {
        $this->iban = $iban;
        return $this;
    }

    /**
     * @return string
     */
    public function getSwift() {
        return $this->swift;
    }

    /**
     * @param string $swift
     *
     * @return SepaDepositPart
     */
    protected function setSwift($swift) {
        $this->swift = $swift;
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
     * @return SepaDepositPart
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
     * @return SepaDepositPart
     */
    protected function setBankAddress($bank_address) {
        $this->bank_address = $bank_address;
        return $this;
    }

    /**
     * @return string
     */
    public function getBankCountryName() {
        return $this->bank_country_name;
    }

    /**
     * @param string $bank_country_name
     *
     * @return SepaDepositPart
     */
    protected function setBankCountryName($bank_country_name) {
        $this->bank_country_name = $bank_country_name;
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
     * @return SepaDepositPart
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
     * @return SepaDepositPart
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
     * @return SepaDepositPart
     */
    protected function setReference($reference) {
        $this->reference = $reference;
        return $this;
    }

}
