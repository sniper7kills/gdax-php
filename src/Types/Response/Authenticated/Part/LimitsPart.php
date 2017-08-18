<?php

namespace GDAX\Types\Response\Authenticated\Part;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class FundingPart
 *
 * @author Benjamin Franke
 */
class LimitsPart implements ResponseTypeInterface {

    use ResponseTypeTrait {
        initFromArray as protected traitInitFromArray;
    }

    /**
     * @var LimitActionPart
     */
    protected $buy;

    /**
     * @var LimitActionPart
     */
    protected $instant_buy;

    /**
     * @var LimitActionPart
     */
    protected $sell;

    /**
     * @var LimitActionPart
     */
    protected $deposit;

    /**
     * @return LimitActionPart
     */
    public function getBuy() {
        return $this->buy;
    }

    /**
     * @param LimitActionPart $buy
     *
     * @return LimitsPart
     */
    protected function setBuy(LimitActionPart $buy) {
        $this->buy = $buy;
        return $this;
    }

    /**
     * @return LimitActionPart
     */
    public function getInstantBuy() {
        return $this->instant_buy;
    }

    /**
     * @param LimitActionPart $instant_buy
     *
     * @return LimitsPart
     */
    protected function setInstantBuy(LimitActionPart $instant_buy) {
        $this->instant_buy = $instant_buy;
        return $this;
    }

    /**
     * @return LimitActionPart
     */
    public function getSell() {
        return $this->sell;
    }

    /**
     * @param LimitActionPart $sell
     *
     * @return LimitsPart
     */
    protected function setSell(LimitActionPart $sell) {
        $this->sell = $sell;
        return $this;
    }

    /**
     * @return LimitActionPart
     */
    public function getDeposit() {
        return $this->deposit;
    }

    /**
     * @param LimitActionPart $deposit
     *
     * @return LimitsPart
     */
    protected function setDeposit(LimitActionPart $deposit) {
        $this->deposit = $deposit;
        return $this;
    }


    /**
     * @param array $data
     *
     * @return $this
     */
    public function initFromArray(array $data) {

        $this->traitInitFromArray($data);

        if (!empty($data['buy'])) {
            $this->setBuy((new LimitActionPart())->initFromArray($data['buy']));
        }

        if (!empty($data['instant_buy'])) {
            $this->setInstantBuy((new LimitActionPart())->initFromArray($data['instant_buy']));
        }

        if (!empty($data['sell'])) {
            $this->setSell((new LimitActionPart())->initFromArray($data['sell']));
        }

        if (!empty($data['deposit'])) {
            $this->setDeposit((new LimitActionPart())->initFromArray($data['deposit']));
        }

        return $this;

    }

}
