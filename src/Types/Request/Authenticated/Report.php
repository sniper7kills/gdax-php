<?php

namespace GDAX\Types\Request\Authenticated;

use GDAX\Interfaces\RequestTypeInterface;
use GDAX\Traits\RequestTypeTrait;
use GDAX\Traits\ValidatorTrait;
use GDAX\Utilities\GDAXConstants;

/**
 * Class Report
 *
 * @author Benjamin Franke
 */
class Report implements RequestTypeInterface {

    use RequestTypeTrait;
    use ValidatorTrait;

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var \DateTime
     */
    protected $start_date;

    /**
     * @var \DateTime
     */
    protected $end_date;

    /**
     * @var string
     */
    protected $product_id;

    /**
     * @var string
     */
    protected $account_id;

    /**
     * @var string
     */
    protected $format;

    /**
     * @var string
     */
    protected $email;

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return Report
     */
    public function setId($id) {
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
     * @return Report
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate() {
        return $this->start_date;
    }

    /**
     * @param \DateTime $start_date
     *
     * @return Report
     */
    public function setStartDate(\DateTime $start_date) {
        $this->start_date = $start_date;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate() {
        return $this->end_date;
    }

    /**
     * @param \DateTime $end_date
     *
     * @return Report
     */
    public function setEndDate(\DateTime $end_date) {
        $this->end_date = $end_date;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductId() {
        return $this->product_id;
    }

    /**
     * @param string $product_id
     *
     * @return Report
     */
    public function setProductId($product_id) {

        $this->checkStringInArray($product_id, GDAXConstants::$productIdValues);
        $this->product_id = $product_id;
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
     * @return Report
     */
    public function setAccountId($account_id) {
        $this->account_id = $account_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getFormat() {
        return $this->format;
    }

    /**
     * @param string $format
     *
     * @return Report
     */
    public function setFormat($format) {

        $this->checkStringInArray($format, GDAXConstants::$reportFormatValues);
        $this->format = $format;
        return $this;

    }

    /**
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return Report
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

}
