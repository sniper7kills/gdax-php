<?php

namespace GDAX\Types\Request\Authenticated;

use GDAX\Interfaces\RequestTypeInterface;
use GDAX\Traits\RequestTypeTrait;
use GDAX\Traits\ValidatorTrait;
use GDAX\Utilities\GDAXConstants;

/**
 * Class Fill
 *
 * @author Benjamin Franke
 */
class Fill implements RequestTypeInterface {

    use RequestTypeTrait;
    use ValidatorTrait;

    /**
     * @var string
     */
    protected $order_id;

    /**
     * @var string
     */
    protected $product_id;

    /**
     * @return string
     */
    public function getOrderId() {
        return $this->order_id;
    }

    /**
     * @param string $order_id
     *
     * @return Fill
     */
    public function setOrderId($order_id) {
        $this->order_id = $order_id;
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
     * @return Fill
     */
    public function setProductId($product_id) {

        $this->checkStringInArray($product_id, GDAXConstants::$productIdValues);
        $this->product_id = $product_id;
        return $this;

    }

}
