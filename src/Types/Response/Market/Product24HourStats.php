<?php

namespace GDAX\Types\Response\Market;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class Product24HourStats
 *
 * @author Benjamin Franke
 */
class Product24HourStats implements ResponseTypeInterface {

    use ResponseTypeTrait;

    /**
     * @var float
     */
    protected $open;

    /**
     * @var float
     */
    protected $high;

    /**
     * @var float
     */
    protected $low;

    /**
     * @var float
     */
    protected $volume;

    /**
     * @var float
     */
    protected $last;

    /**
     * @var float
     */
    protected $volume_30day;

    /**
     * @return float
     */
    public function getOpen() {
        return $this->open;
    }

    /**
     * @param float $open
     *
     * @return Product24HourStats
     */
    protected function setOpen($open) {
        $this->open = (float)$open;
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
     * @return Product24HourStats
     */
    protected function setHigh($high) {
        $this->high = (float)$high;
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
     * @return Product24HourStats
     */
    protected function setLow($low) {
        $this->low = (float)$low;
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
     * @return Product24HourStats
     */
    protected function setVolume($volume) {
        $this->volume = (float)$volume;
        return $this;
    }

    /**
     * @return float
     */
    public function getLast() {
        return $this->last;
    }

    /**
     * @param float $last
     *
     * @return Product24HourStats
     */
    public function setLast($last) {
        $this->last = (float)$last;
        return $this;
    }

    /**
     * @return float
     */
    public function getVolume30day() {
        return $this->volume_30day;
    }

    /**
     * @param float $volume_30day
     *
     * @return Product24HourStats
     */
    public function setVolume30day($volume_30day) {
        $this->volume_30day = (float)$volume_30day;
        return $this;
    }

}
