<?php

namespace GDAX\Types\Response\Market;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class Time
 *
 * @author Benjamin Franke
 */
class Time implements ResponseTypeInterface {

    use ResponseTypeTrait;

    /**
     * @var string
     */
    protected $iso;

    /**
     * @var string
     */
    protected $epoch;

    /**
     * @return string
     */
    public function getIso() {
        return $this->iso;
    }

    /**
     * @param string $iso
     *
     * @return Time
     */
    protected function setIso($iso) {
        $this->iso = $iso;
        return $this;
    }

    /**
     * @return string
     */
    public function getEpoch() {
        return $this->epoch;
    }

    /**
     * @param string $epoch
     *
     * @return Time
     */
    protected function setEpoch($epoch) {
        $this->epoch = $epoch;
        return $this;
    }

}
