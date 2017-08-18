<?php

namespace GDAX\Types\Request\Authenticated;

use GDAX\Interfaces\RequestTypeInterface;
use GDAX\Traits\RequestTypeTrait;

/**
 * Class Account
 *
 * @author Benjamin Franke
 */
class Account implements RequestTypeInterface {

    use RequestTypeTrait;

    /**
     * @var string
     */
    protected $id;

    /**
     * @return AccountPaginated
     */
    public function toPaginated() {
        return (new AccountPaginated())->setId($this->getId());
    }

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return Account
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

}
