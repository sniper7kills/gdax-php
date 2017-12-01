<?php

namespace GDAX\Types\Response\Market;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class ProductHistoricRate
 *
 * @author Brandon Eckenrode
 */
class ProductHistoricRate implements ResponseTypeInterface {

    use ResponseTypeTrait {
        initFromArray as protected traitInitFromArray;
    }

    /**
     * @var \DateTime
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
     * @return \DateTime
     */
    public function getTime() {
        return $this->time;
    }

    /**
     * @param int $time
     *
     * @return ProductHistoricRate
     */
    protected function setTime($time) {

        if ($time === null) {
            $time = 0;
        }

        $this->time = new \DateTime('@' . $time);
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
     * @return ProductHistoricRate
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
     * @return ProductHistoricRate
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
     * @return ProductHistoricRate
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
     * @return ProductHistoricRate
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
     * @return ProductHistoricRate
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

        return $this->setTime($data[0])
            ->setLow($data[1])
            ->setHigh($data[2])
            ->setOpen($data[3])
            ->setClose($data[4])
            ->setVolume($data[5]);

    }

}
