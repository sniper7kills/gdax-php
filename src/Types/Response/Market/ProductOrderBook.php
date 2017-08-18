<?php

namespace GDAX\Types\Response\Market;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class ProductOrderBook
 *
 * @author Benjamin Franke
 */
class ProductOrderBook implements ResponseTypeInterface {

    use ResponseTypeTrait;

    /**
     * @var int
     */
    protected $sequence;

    /**
     * @var array
     */
    protected $asks;

    /**
     * @var array
     */
    protected $bids;

    /**
     * @return int
     */
    public function getSequence() {
        return $this->sequence;
    }

    /**
     * @param int $sequence
     *
     * @return ProductOrderBook
     */
    protected function setSequence($sequence) {
        $this->sequence = (int)$sequence;
        return $this;
    }

    /**
     * @return array
     */
    public function getAsks() {
        return $this->asks;
    }

    /**
     * @param array $asks
     *
     * @return ProductOrderBook
     */
    protected function setAsks(array $asks) {
        $this->asks = $asks;
        return $this;
    }

    /**
     * @return array
     */
    public function getBids() {
        return $this->bids;
    }

    /**
     * @param array $bids
     *
     * @return ProductOrderBook
     */
    protected function setBids(array $bids) {
        $this->bids = $bids;
        return $this;
    }

}
