<?php

namespace GDAX\Traits;

/**
 * Trait PaginationTrait
 */
trait PaginationTrait {

    /**
     * @var int
     */
    protected $before;

    /**
     * @var int
     */
    protected $after;

    /**
     * @var int
     */
    protected $limit;

    /**
     * @return int
     */
    public function getBefore() {
        return $this->before;
    }

    /**
     * @param int $before
     *
     * @return PaginationTrait
     */
    public function setBefore($before) {
        $this->before = (int)$before;
        return $this;
    }

    /**
     * @return int
     */
    public function getAfter() {
        return $this->after;
    }

    /**
     * @param int $after
     *
     * @return PaginationTrait
     */
    public function setAfter($after) {
        $this->after = (int)$after;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimit() {
        return $this->limit;
    }

    /**
     * @param int $limit
     *
     * @return PaginationTrait
     */
    public function setLimit($limit) {
        $this->limit = (int)$limit;
        return $this;
    }

}
