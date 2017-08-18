<?php

namespace GDAX\Types\Response\Authenticated;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;
use GDAX\Types\Response\Authenticated\Part\AccountPart;
use GDAX\Types\Response\Authenticated\Part\FundingPart;
use GDAX\Types\Response\Authenticated\Part\MarginCallPart;
use GDAX\Types\Response\Authenticated\Part\PositionPart;

/**
 * Class Position
 *
 * @author Benjamin Franke
 */
class Position implements ResponseTypeInterface {

    use ResponseTypeTrait {
        initFromArray as protected traitInitFromArray;
    }

    /**
     * @var string
     */
    protected $status;

    /**
     * @var FundingPart
     */
    protected $funding;

    /**
     * @var AccountPart[]
     */
    protected $accounts;

    /**
     * @var MarginCallPart
     */
    protected $margin_call;

    /**
     * @var string
     */
    protected $user_id;

    /**
     * @var string
     */
    protected $profile_id;

    /**
     * @var PositionPart
     */
    protected $position;

    /**
     * @var string
     */
    protected $product_id;

    /**
     * @return string
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return Position
     */
    protected function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * @return FundingPart
     */
    public function getFunding() {
        return $this->funding;
    }

    /**
     * @param FundingPart $funding
     *
     * @return Position
     */
    protected function setFunding($funding) {
        $this->funding = $funding;
        return $this;
    }

    /**
     * @return AccountPart[]
     */
    public function getAccounts() {
        return $this->accounts;
    }

    /**
     * @param AccountPart[] $accounts
     *
     * @return Position
     */
    protected function setAccounts($accounts) {
        $this->accounts = $accounts;
        return $this;
    }

    /**
     * @return MarginCallPart
     */
    public function getMarginCall() {
        return $this->margin_call;
    }

    /**
     * @param MarginCallPart $margin_call
     *
     * @return Position
     */
    protected function setMarginCall($margin_call) {
        $this->margin_call = $margin_call;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserId() {
        return $this->user_id;
    }

    /**
     * @param string $user_id
     *
     * @return Position
     */
    protected function setUserId($user_id) {
        $this->user_id = $user_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getProfileId() {
        return $this->profile_id;
    }

    /**
     * @param string $profile_id
     *
     * @return Position
     */
    protected function setProfileId($profile_id) {
        $this->profile_id = $profile_id;
        return $this;
    }

    /**
     * @return PositionPart
     */
    public function getPosition() {
        return $this->position;
    }

    /**
     * @param PositionPart $position
     *
     * @return Position
     */
    protected function setPosition($position) {
        $this->position = $position;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductId() {
        return $this->product_id;
    }

    /**
     * @param string $product_id
     *
     * @return Position
     */
    protected function setProductId($product_id) {
        $this->product_id = $product_id;
        return $this;
    }

    /**
     * @param array $data
     *
     * @return $this
     */
    public function initFromArray(array $data) {

        $this->traitInitFromArray($data);

        if (!empty($data['funding'])) {
            $this->setFunding((new FundingPart())->initFromArray($data['funding']));
        }

        if (!empty($data['margin_call'])) {
            $this->setMarginCall((new MarginCallPart())->initFromArray($data['margin_call']));
        }

        if (!empty($data['accounts'])) {

            $this->setAccounts([]);

            foreach ($data['accounts'] as $currency => $details) {
                $details['currency'] = $currency;
                $this->accounts[] = (new AccountPart())->initFromArray($details);
            }

        }

        if (!empty($data['position'])) {
            $this->setPosition((new PositionPart())->initFromArray($data['position']));
        }

        return $this;

    }

}
