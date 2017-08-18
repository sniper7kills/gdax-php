<?php

namespace GDAX\Types\Response\Authenticated\Part;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class MarginCallPart
 *
 * @author Benjamin Franke
 */
class MarginCallPart implements ResponseTypeInterface {

    use ResponseTypeTrait;

    /**
     * @var bool
     */
    protected $active;

    /**
     * @var float
     */
    protected $price;

    /**
     * @var string
     */
    protected $side;

    /**
     * @var float
     */
    protected $size;

    /**
     * @var float
     */
    protected $funds;

    /**
     * @return bool
     */
    public function isActive() {
        return $this->active;
    }

    /**
     * @param bool $active
     *
     * @return MarginCallPart
     */
    protected function setActive($active) {
        $this->active = (bool)$active;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * @param float $price
     *
     * @return MarginCallPart
     */
    protected function setPrice($price) {
        $this->price = (float)$price;
        return $this;
    }

    /**
     * @return string
     */
    public function getSide() {
        return $this->side;
    }

    /**
     * @param string $side
     *
     * @return MarginCallPart
     */
    protected function setSide($side) {
        $this->side = (float)$side;
        return $this;
    }

    /**
     * @return float
     */
    public function getSize() {
        return $this->size;
    }

    /**
     * @param float $size
     *
     * @return MarginCallPart
     */
    protected function setSize($size) {
        $this->size = (float)$size;
        return $this;
    }

    /**
     * @return float
     */
    public function getFunds() {
        return $this->funds;
    }

    /**
     * @param float $funds
     *
     * @return MarginCallPart
     */
    protected function setFunds($funds) {
        $this->funds = (float)$funds;
        return $this;
    }

}
