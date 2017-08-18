<?php

namespace GDAX\Traits;

/**
 * Trait ValidatorTrait
 */
trait ValidatorTrait {

    /**
     * @param string $string
     * @param array  $array
     */
    public function checkStringInArray($string, array $array) {

        if (!in_array($string, $array)) {
            throw new \LogicException($string . ' is not among the allowed values of ' . implode(', ', $array));
        }

    }

}
