<?php

namespace GDAX\Types\Response\Market;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class ProductHistoricRates
 *
 * @author Brandon Eckenrode
 */
class ProductHistoricRates implements ResponseTypeInterface {

    use ResponseTypeTrait {
        initFromArray as protected traitInitFromArray;
    }

    /**
     * @var int
     */
    protected $time;

    /**
     * @var float
     */
    protected $low;

    /**
     * @var float
     */
    protected $high;

    /**
     * @var float
     */
    protected $open;

    /**
     * @var float
     */
    protected $close;

    /**
     * @var float
     */
    protected $volume;

    /**
     * @return int
     */
    public function getTime() {
        return $this->time;
    }

    /**
     * @param int $time
     *
     * @return ProductHistoricRates
     */
    protected function setTime($time) {
        $this->time = (int)$time;
        return $this;
    }

    /**
     * @return float
     */
    public function getLow() {
        return $this->low;
    }

    /**
     * @param float $low
     *
     * @return ProductHistoricRates
     */
    protected function setLow($low) {
        $this->low = (float)$low;
        return $this;
    }

    /**
     * @return float
     */
    public function getHigh() {
        return $this->high;
    }

    /**
     * @param float $high
     *
     * @return ProductHistoricRates
     */
    protected function setHigh($high) {
        $this->high = (float)$high;
        return $this;
    }

    /**
     * @return float
     */
    public function getOpen() {
        return $this->open;
    }

    /**
     * @param float $open
     *
     * @return ProductHistoricRates
     */
    protected function setOpen($open) {
        $this->open = (float)$open;
        return $this;
    }

    /**
     * @return float
     */
    public function getClose() {
        return $this->close;
    }

    /**
     * @param float $close
     *
     * @return ProductHistoricRates
     */
    protected function setClose($close) {
        $this->close = (float)$close;
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
     * @return ProductHistoricRates
     */
    protected function setVolume($volume) {
        $this->volume = (float)$volume;
        return $this;
    }

    /**
     * @param array $data
     *
     * @return $this
     */
    public function initFromArray(array $data) {

        $this->setTime($data[0]);
        
        $this->setLow($data[1]);
        
        $this->setHigh($data[2]);
        
        $this->setOpen($data[3]);
        
        $this->setClose($data[4]);

        $this->setVolume($data[5]);

        return $this;

    }

}
