<?php

namespace GDAX\Types\Response\Authenticated;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;
use GDAX\Types\Response\Authenticated\Part\ParamsPart;

/**
 * Class Report
 *
 * @author Benjamin Franke
 */
class Report implements ResponseTypeInterface {

    use ResponseTypeTrait {
        initFromArray as protected traitInitFromArray;
    }

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var \DateTime
     */
    protected $created_at;

    /**
     * @var \DateTime|null
     */
    protected $completed_at;

    /**
     * @var \DateTime|null
     */
    protected $expires_at;

    /**
     * @var string
     */
    protected $file_url;

    /**
     * @var ParamsPart
     */
    protected $params;

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return Report
     */
    protected function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return Report
     */
    protected function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return Report
     */
    protected function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt() {
        return $this->created_at;
    }

    /**
     * @param \DateTime $created_at
     *
     * @return Report
     */
    protected function setCreatedAt($created_at) {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getCompletedAt() {
        return $this->completed_at;
    }

    /**
     * @param \DateTime|null $completed_at
     *
     * @return Report
     */
    protected function setCompletedAt($completed_at) {
        $this->completed_at = $completed_at;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getExpiresAt() {
        return $this->expires_at;
    }

    /**
     * @param \DateTime|null $expires_at
     *
     * @return Report
     */
    protected function setExpiresAt($expires_at) {
        $this->expires_at = $expires_at;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileUrl() {
        return $this->file_url;
    }

    /**
     * @param string $file_url
     *
     * @return Report
     */
    protected function setFileUrl($file_url) {
        $this->file_url = $file_url;
        return $this;
    }

    /**
     * @return ParamsPart
     */
    public function getParams() {
        return $this->params;
    }

    /**
     * @param ParamsPart $params
     *
     * @return Report
     */
    protected function setParams($params) {
        $this->params = $params;
        return $this;
    }

    /**
     * @param array $data
     *
     * @return $this
     */
    public function initFromArray(array $data) {

        $this->traitInitFromArray($data);

        if (!empty($data['params'])) {
            $this->setParams((new ParamsPart())->initFromArray($data['params']));
        }

        return $this;

    }

}
