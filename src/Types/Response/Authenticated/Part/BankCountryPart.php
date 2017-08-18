<?php

namespace GDAX\Types\Response\Authenticated\Part;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class BankCountryPart
 *
 * @author Benjamin Franke
 */
class BankCountryPart implements ResponseTypeInterface {

    use ResponseTypeTrait;

    /**
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $name;

    /**
     * @return string
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * @param string $code
     *
     * @return BankCountryPart
     */
    protected function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return BankCountryPart
     */
    protected function setName($name) {
        $this->name = $name;
        return $this;
    }

}
