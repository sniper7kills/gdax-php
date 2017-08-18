<?php

namespace GDAX\Traits;

/**
 * Trait ResponseTypeTrait
 *
 * @package GDAX\Traits
 */
trait ResponseTypeTrait {

    /**
     * @var string
     */
    protected $message;

    /**
     * @return string
     */
    public function getMessage() {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return ResponseTypeTrait
     */
    public function setMessage($message) {
        $this->message = $message;
        return $this;
    }

    /**
     * @param array $data
     *
     * @return $this
     */
    public function initFromArray(array $data) {

        $unknownFields = [];

        foreach ($data as $k => $v) {

            if (empty($v)) {
                continue;
            }

            $setter = 'set' . ucfirst(str_replace('_', '', ucwords($k, '_')));

            if (method_exists($this, $setter)) {
                $this->{$setter}($v);
                continue;
            }

            $unknownFields[$k] = $v;

        }

        if (!empty($unknownFields)) {
            trigger_error('Encountered unknown fields in response: ' . json_encode($unknownFields));
        }

        return $this;

    }

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
