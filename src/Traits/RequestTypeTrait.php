<?php

namespace GDAX\Traits;

/**
 * Trait RequestTypeTrait
 *
 * @package GDAX\Traits
 */
trait RequestTypeTrait {

    /**
     * @return array
     */
    public function toArray() {

        $data = [];

        $vars = get_object_vars($this);

        foreach ($vars as $k => $v) {

            if (empty($v)) {
                continue;
            }

            if ($v instanceof \DateTime) {
                $data[$k] = $v->format('c');
                continue;
            }

            $data[$k] = $v;

        }

        return $data;

    }

}
