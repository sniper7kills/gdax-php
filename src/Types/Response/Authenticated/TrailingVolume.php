<?php

namespace GDAX\Types\Response\Authenticated;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class TrailingVolume
 *
 * @author Benjamin Franke
 */
class TrailingVolume implements ResponseTypeInterface {

    use ResponseTypeTrait;

    /**
     * @var string
     */
    protected $product_id;

    /**
     * @var string
     */
    protected $exchange_volume;

    /**
     * @var float
     */
    protected $volume;

    /**
     * @var \DateTime
     */
    protected $recorded_at;

    /**
     * @return string
     */
    public function getProductId() {
        return $this->product_id;
    }

    /**
     * @param string $product_id
     *
     * @return TrailingVolume
     */
    protected function setProductId($product_id) {
        $this->product_id = $product_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getExchangeVolume() {
        return $this->exchange_volume;
    }

    /**
     * @param string $exchange_volume
     *
     * @return TrailingVolume
     */
    protected function setExchangeVolume($exchange_volume) {
        $this->exchange_volume = (float)$exchange_volume;
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
     * @return TrailingVolume
     */
    protected function setVolume($volume) {
        $this->volume = (float)$volume;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRecordedAt() {
        return $this->recorded_at;
    }

    /**
     * @param \DateTime $recorded_at
     *
     * @return TrailingVolume
     */
    protected function setRecordedAt($recorded_at) {
        $this->recorded_at = new \DateTime($recorded_at);
        return $this;
    }

}
