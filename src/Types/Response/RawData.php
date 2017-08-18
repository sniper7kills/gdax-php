<?php

namespace GDAX\Types\Response;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class RawData
 *
 * @author Benjamin Franke
 */
class RawData implements ResponseTypeInterface {

    use ResponseTypeTrait;

    /**
     * @var array
     */
    protected $data;

    /**
     * @param array $data
     *
     * @return $this
     */
    public function initFromArray(array $data) {
        $this->setData($data);
        return $this;
    }

    /**
     * @return array
     */
    public function getData() {
        return $this->data;
    }

    /**
     * @param array $data
     *
     * @return RawData
     */
    protected function setData($data) {
        $this->data = $data;
        return $this;
    }

}
