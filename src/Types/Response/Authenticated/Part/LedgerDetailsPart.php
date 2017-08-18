<?php

namespace GDAX\Types\Response\Authenticated\Part;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class LedgerDetailsPart
 *
 * @author Benjamin Franke
 */
class LedgerDetailsPart implements ResponseTypeInterface {

    use ResponseTypeTrait;

    /**
     * @var string
     */
    protected $order_id;

    /**
     * @var string
     */
    protected $trade_id;

    /**
     * @var string
     */
    protected $product_id;

    /**
     * @var string
     */
    protected $transfer_id;

    /**
     * @var string
     */
    protected $transfer_type;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $direction;

    /**
     * @return string
     */
    public function getOrderId() {
        return $this->order_id;
    }

    /**
     * @param string $order_id
     *
     * @return LedgerDetailsPart
     */
    protected function setOrderId($order_id) {
        $this->order_id = $order_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTradeId() {
        return $this->trade_id;
    }

    /**
     * @param string $trade_id
     *
     * @return LedgerDetailsPart
     */
    protected function setTradeId($trade_id) {
        $this->trade_id = (int)$trade_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductId() {
        return $this->product_id;
    }

    /**
     * @param string $product_id
     *
     * @return LedgerDetailsPart
     */
    protected function setProductId($product_id) {
        $this->product_id = $product_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransferId() {
        return $this->transfer_id;
    }

    /**
     * @param string $transfer_id
     *
     * @return LedgerDetailsPart
     */
    protected function setTransferId($transfer_id) {
        $this->transfer_id = $transfer_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransferType() {
        return $this->transfer_type;
    }

    /**
     * @param string $transfer_type
     *
     * @return LedgerDetailsPart
     */
    protected function setTransferType($transfer_type) {
        $this->transfer_type = $transfer_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return LedgerDetailsPart
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getDirection() {
        return $this->direction;
    }

    /**
     * @param string $direction
     *
     * @return LedgerDetailsPart
     */
    public function setDirection($direction) {
        $this->direction = $direction;
        return $this;
    }

}
