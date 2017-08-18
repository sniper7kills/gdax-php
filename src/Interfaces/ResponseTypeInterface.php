<?php

namespace GDAX\Interfaces;

/**
 * Interface ResponseTypeInterface
 *
 * @package GDAX\Interfaces
 */
interface ResponseTypeInterface {

    /**
     * @param array $data
     *
     * @return self
     */
    public function initFromArray(array $data);

    /**
     * @return array
     */
    public function toArray();

}
