<?php

namespace GDAX\Types\Response\Authenticated\Part;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class ParamsPart
 *
 * @author Benjamin Franke
 */
class ParamsPart implements ResponseTypeInterface {

    use ResponseTypeTrait;

    /**
     * @var \DateTime
     */
    protected $start_date;

    /**
     * @var \DateTime
     */
    protected $end_date;

    /**
     * @return \DateTime
     */
    public function getStartDate() {
        return $this->start_date;
    }

    /**
     * @param \DateTime $start_date
     *
     * @return ParamsPart
     */
    protected function setStartDate($start_date) {
        $this->start_date = new \DateTime($start_date);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate() {
        return $this->end_date;
    }

    /**
     * @param string $end_date
     *
     * @return ParamsPart
     */
    protected function setEndDate($end_date) {
        $this->end_date = new \DateTime($end_date);
        return $this;
    }

}
