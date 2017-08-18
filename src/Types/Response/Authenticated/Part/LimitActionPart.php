<?php

namespace GDAX\Types\Response\Authenticated\Part;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class FundingPart
 *
 * @author Benjamin Franke
 */
class LimitActionPart implements ResponseTypeInterface {

    use ResponseTypeTrait {
        initFromArray as protected traitInitFromArray;
    }

    /**
     * @var int
     */
    protected $period_in_days;

    /**
     * @var LimitAmount
     */
    protected $total;

    /**
     * @var LimitAmount
     */
    protected $remaining;

    /**
     * @return int
     */
    public function getPeriodInDays() {
        return $this->period_in_days;
    }

    /**
     * @param int $period_in_days
     *
     * @return LimitActionPart
     */
    protected function setPeriodInDays($period_in_days) {
        $this->period_in_days = (int)$period_in_days;
        return $this;
    }

    /**
     * @return LimitAmount
     */
    public function getTotal() {
        return $this->total;
    }

    /**
     * @param LimitAmount $total
     *
     * @return LimitActionPart
     */
    protected function setTotal($total) {
        $this->total = $total;
        return $this;
    }

    /**
     * @return LimitAmount
     */
    public function getRemaining() {
        return $this->remaining;
    }

    /**
     * @param LimitAmount $remaining
     *
     * @return LimitActionPart
     */
    protected function setRemaining($remaining) {
        $this->remaining = $remaining;
        return $this;
    }

    /**
     * @param array $data
     *
     * @return $this
     */
    public function initFromArray(array $data) {

        $this->traitInitFromArray($data);

        if (!empty($data['total'])) {
            $this->setTotal((new LimitAmount())->initFromArray($data['total']));
        }

        if (!empty($data['remaining'])) {
            $this->setRemaining((new LimitAmount())->initFromArray($data['remaining']));
        }

        return $this;

    }

}
