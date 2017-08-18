<?php

namespace GDAX\Types\Request\Authenticated;

use GDAX\Interfaces\RequestTypeInterface;
use GDAX\Traits\PaginationTrait;
use GDAX\Traits\RequestTypeTrait;

/**
 * Class AccountPaginated
 *
 * @author Benjamin Franke
 */
class AccountPaginated implements RequestTypeInterface {

    use RequestTypeTrait;
    use PaginationTrait;

    /**
     * @var string
     */
    protected $id;

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return AccountPaginated
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

}
