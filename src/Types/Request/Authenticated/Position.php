<?php

namespace GDAX\Types\Request\Authenticated;

use GDAX\Interfaces\RequestTypeInterface;
use GDAX\Traits\RequestTypeTrait;

/**
 * Class Position
 *
 * @author Benjamin Franke
 */
class Position implements RequestTypeInterface {

    use RequestTypeTrait;

    /**
     * @var bool
     */
    protected $repay_only;

    /**
     * @return bool
     */
    public function isRepayOnly() {
        return $this->repay_only;
    }

    /**
     * @param bool $repay_only
     *
     * @return Position
     */
    public function setRepayOnly($repay_only) {
        $this->repay_only = (bool)$repay_only;
        return $this;
    }

}
