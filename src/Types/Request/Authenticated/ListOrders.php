<?php

namespace GDAX\Types\Request\Authenticated;

use GDAX\Interfaces\RequestTypeInterface;
use GDAX\Traits\RequestTypeTrait;
use GDAX\Traits\ValidatorTrait;
use GDAX\Utilities\GDAXConstants;

/**
 * Class ListOrders
 *
 * @author Benjamin Franke
 */
class ListOrders implements RequestTypeInterface {

    use RequestTypeTrait;
    use ValidatorTrait;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $product_id;

    /**
     * @return string
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return ListOrders
     */
    public function setStatus($status) {

        $this->checkStringInArray($status, GDAXConstants::$orderStatusValues);
        $this->status = $status;
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
     * @return ListOrders
     */
    public function setProductId($product_id) {

        $this->checkStringInArray($product_id, GDAXConstants::$productIdValues);
        $this->product_id = $product_id;
        return $this;

    }
}
