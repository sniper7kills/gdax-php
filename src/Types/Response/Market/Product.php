<?php

namespace GDAX\Types\Response\Market;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class Product
 *
 * @author Benjamin Franke
 */
class Product implements ResponseTypeInterface {

    use ResponseTypeTrait;

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $base_currency;

    /**
     * @var string
     */
    protected $quote_currency;

    /**
     * @var float
     */
    protected $base_min_size;

    /**
     * @var float
     */
    protected $base_max_size;

    /**
     * @var float
     */
    protected $quote_increment;

    /**
     * @var string
     */
    protected $display_name;

    /**
     * @var bool
     */
    protected $margin_enabled;

    /**
     * @var string
     */
    protected $status;

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return Product
     */
    protected function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getBaseCurrency() {
        return $this->base_currency;
    }

    /**
     * @param string $base_currency
     *
     * @return Product
     */
    protected function setBaseCurrency($base_currency) {
        $this->base_currency = $base_currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuoteCurrency() {
        return $this->quote_currency;
    }

    /**
     * @param string $quote_currency
     *
     * @return Product
     */
    protected function setQuoteCurrency($quote_currency) {
        $this->quote_currency = $quote_currency;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseMinSize() {
        return $this->base_min_size;
    }

    /**
     * @param float $base_min_size
     *
     * @return Product
     */
    protected function setBaseMinSize($base_min_size) {
        $this->base_min_size = (float)$base_min_size;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseMaxSize() {
        return $this->base_max_size;
    }

    /**
     * @param float $base_max_size
     *
     * @return Product
     */
    protected function setBaseMaxSize($base_max_size) {
        $this->base_max_size = (float)$base_max_size;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuoteIncrement() {
        return $this->quote_increment;
    }

    /**
     * @param float $quote_increment
     *
     * @return Product
     */
    protected function setQuoteIncrement($quote_increment) {
        $this->quote_increment = (float)$quote_increment;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName() {
        return $this->display_name;
    }

    /**
     * @param string $display_name
     *
     * @return Product
     */
    protected function setDisplayName($display_name) {
        $this->display_name = $display_name;
        return $this;
    }

    /**
     * @return bool
     */
    public function isMarginEnabled() {
        return $this->margin_enabled;
    }

    /**
     * @param bool $margin_enabled
     *
     * @return Product
     */
    protected function setMarginEnabled($margin_enabled) {
        $this->margin_enabled = (bool)$margin_enabled;
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
     * @return Product
     */
    protected function setStatus($status) {
        $this->status = $status;
        return $this;
    }
}
