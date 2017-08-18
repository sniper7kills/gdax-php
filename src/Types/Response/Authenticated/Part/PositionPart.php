<?php

namespace GDAX\Types\Response\Authenticated\Part;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class PositionPart
 *
 * @author Benjamin Franke
 */
class PositionPart implements ResponseTypeInterface {

    use ResponseTypeTrait;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var float
     */
    protected $size;

    /**
     * @var float
     */
    protected $complement;

    /**
     * @var float
     */
    protected $max_size;

    /**
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return PositionPart
     */
    protected function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * @return float
     */
    public function getSize() {
        return $this->size;
    }

    /**
     * @param float $size
     *
     * @return PositionPart
     */
    protected function setSize($size) {
        $this->size = (float)$size;
        return $this;
    }

    /**
     * @return float
     */
    public function getComplement() {
        return $this->complement;
    }

    /**
     * @param float $complement
     *
     * @return PositionPart
     */
    protected function setComplement($complement) {
        $this->complement = (float)$complement;
        return $this;
    }

    /**
     * @return float
     */
    public function getMaxSize() {
        return $this->max_size;
    }

    /**
     * @param float $max_size
     *
     * @return PositionPart
     */
    protected function setMaxSize($max_size) {
        $this->max_size = (float)$max_size;
        return $this;
    }

}
