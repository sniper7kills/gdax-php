<?php

namespace GDAX\Types\Response;

use GDAX\Interfaces\ResponseTypeInterface;

/**
 * Class ResponseContainer
 *
 * @author Benjamin Franke
 */
class ResponseContainer {

    /**
     * @var array
     */
    protected $rawData;

    /**
     * @var ResponseTypeInterface[]|ResponseTypeInterface
     */
    protected $data;

    /**
     * @var string
     */
    protected $message;

    /**
     * @param $type
     *
     * @return $this
     */
    public function mapResponseToType($type) {

        if (!empty($this->rawData)) {

            foreach ($this->rawData as $dataSet) {

                if (!is_array($dataSet)) {
                    $this->data = (new $type())->initFromArray($this->rawData);
                    break;
                }

                $this->data[] = (new $type())->initFromArray($dataSet);

            }

        }

        if (!empty($this->rawData['before'])) {
            $this->data->setBefore($this->rawData['before']);
        }

        if (!empty($this->rawData['after'])) {
            $this->data->setAfter($this->rawData['before']);
        }

        if (!empty($this->rawData['message'])) {
            $this->data->setMessage($this->rawData['message']);
        }

        return $this;

    }

    /**
     * @return bool
     */
    public function hasData() {
        return count($this->data) > 0;
    }

    /**
     * @return ResponseTypeInterface|ResponseTypeInterface[]
     */
    public function getData() {
        return $this->data;
    }

    /**
     * @param ResponseTypeInterface|ResponseTypeInterface[] $data
     *
     * @return ResponseContainer
     */
    protected function setData($data) {
        $this->data = $data;
        return $this;
    }

    /**
     * @param array $data
     *
     * @return ResponseContainer
     */
    public function setRawData(array $data) {

        $this->rawData = $data;

        if (isset($data['message'])) {
            $this->setMessage($data['message']);
        }

        return $this;

    }

    /**
     * @return string
     */
    public function getMessage() {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return ResponseContainer
     */
    protected function setMessage($message) {
        $this->message = $message;
        return $this;
    }

}
