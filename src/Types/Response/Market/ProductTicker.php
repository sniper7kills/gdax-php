<?php

namespace GDAX\Types\Response\Market;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class ProductTicker
 *
 * @author Benjamin Franke
 */
class ProductTicker implements ResponseTypeInterface {

    use ResponseTypeTrait;

    /**
     * @var int
     */
    protected $trade_id;

    /**
     * @var float
     */
    protected $price;

    /**
     * @var float
     */
    protected $size;

    /**
     * @var float
     */
    protected $bid;

    /**
     * @var float
     */
    protected $ask;

    /**
     * @var float
     */
    protected $volume;

    /**
     * @var \DateTime
     */
    protected $time;

    /**
     * @return int
     */
    public function getTradeId() {
        return $this->trade_id;
    }

    /**
     * @param int $trade_id
     *
     * @return ProductTicker
     */
    protected function setTradeId($trade_id) {
        $this->trade_id = (int)$trade_id;
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
     * @return ProductTicker
     */
    protected function setPrice($price) {
        $this->price = (float)$price;
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
     * @return ProductTicker
     */
    protected function setSize($size) {
        $this->size = (float)$size;
        return $this;
    }

    /**
     * @return float
     */
    public function getBid() {
        return $this->bid;
    }

    /**
     * @param float $bid
     *
     * @return ProductTicker
     */
    protected function setBid($bid) {
        $this->bid = (float)$bid;
        return $this;
    }

    /**
     * @return float
     */
    public function getAsk() {
        return $this->ask;
    }

    /**
     * @param float $ask
     *
     * @return ProductTicker
     */
    protected function setAsk($ask) {
        $this->ask = (float)$ask;
        return $this;
    }

    /**
     * @return float
     */
    public function getVolume() {
        return $this->volume;
    }

    /**
     * @param float $volume
     *
     * @return ProductTicker
     */
    protected function setVolume($volume) {
        $this->volume = (float)$volume;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTime() {
        return $this->time;
    }

    /**
     * @param \DateTime $time
     *
     * @return ProductTicker
     */
    protected function setTime($time) {
        $this->time = new \DateTime($time);
        return $this;
    }

}
