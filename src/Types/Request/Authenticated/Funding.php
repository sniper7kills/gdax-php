<?php

namespace GDAX\Types\Request\Authenticated;

use GDAX\Interfaces\RequestTypeInterface;
use GDAX\Traits\PaginationTrait;
use GDAX\Traits\RequestTypeTrait;
use GDAX\Traits\ValidatorTrait;
use GDAX\Utilities\GDAXConstants;

/**
 * Class Funding
 *
 * @author Benjamin Franke
 */
class Funding implements RequestTypeInterface {

    use RequestTypeTrait;
    use ValidatorTrait;
    use PaginationTrait;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var float
     */
    protected $amount;

    /**
     * @var string
     */
    protected $currency;

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
    public function setStatus($status) {

        $this->checkStringInArray($status, GDAXConstants::$fundingStatusValues);
        $this->status = $status;
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
    public function setAmount($amount) {
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
     * @return Funding
     */
    public function setCurrency($currency) {

        $this->checkStringInArray($currency, GDAXConstants::$currencyValues);
        $this->currency = $currency;
        return $this;

    }

}
