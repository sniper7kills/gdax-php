<?php

namespace GDAX\Types\Request\Market;

use GDAX\Interfaces\RequestTypeInterface;
use GDAX\Traits\PaginationTrait;
use GDAX\Traits\RequestTypeTrait;
use GDAX\Traits\ValidatorTrait;
use GDAX\Utilities\GDAXConstants;

/**
 * Class Product
 *
 * @author Benjamin Franke
 */
class Product implements RequestTypeInterface {

    use RequestTypeTrait;
    use ValidatorTrait;
    use PaginationTrait;

    /**
     * @var string
     */
    protected $product_id;

    /**
     * @var int
     */
    protected $level;

    /**
     * @var \DateTime
     */
    protected $start;

    /**
     * @var \DateTime
     */
    protected $end;

    /**
     * @var int
     */
    protected $granularity;

    /**
     * @return string
     */
    public function getProductId() {
        return $this->product_id;
    }

    /**
     * @param string $product_id
     *
     * @return Product
     */
    public function setProductId($product_id) {

        $this->checkStringInArray($product_id, GDAXConstants::$productIdValues);
        $this->product_id = $product_id;
        return $this;

    }

    /**
     * @return int
     */
    public function getLevel() {
        return $this->level;
    }

    /**
     * @param int $level
     *
     * @return Product
     */
    public function setLevel($level) {
        $this->level = (int)$level;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStart() {
        return $this->start;
    }

    /**
     * @param \DateTime $start
     *
     * @return Product
     */
    public function setStart(\DateTime $start) {
        $this->start = $start;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEnd() {
        return $this->end;
    }

    /**
     * @param \DateTime $end
     *
     * @return Product
     */
    public function setEnd(\DateTime $end) {
        $this->end = $end;
        return $this;
    }

    /**
     * @return int
     */
    public function getGranularity() {
        return $this->granularity;
    }

    /**
     * @param int $granularity
     *
     * @return Product
     */
    public function setGranularity($granularity) {
        $this->granularity = (int)$granularity;
        return $this;
    }

}
