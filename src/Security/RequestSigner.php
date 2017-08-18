<?php

namespace GDAX\Security;

use GDAX\Utilities\GDAXConstants;

/**
 * Class RequestSigner
 *
 * @author Benjamin Franke
 */
class RequestSigner {

    /**
     * @var string
     */
    protected $key;

    /**
     * @var string
     */
    protected $signature;

    /**
     * @var string
     */
    protected $timestamp;

    /**
     * @var string
     */
    protected $passphrase;

    /**
     * RequestSigner constructor.
     *
     * @param Auth   $auth
     * @param string $method
     * @param array  $uriParts
     * @param array  $options
     */
    public function __construct(Auth $auth, $method, array $uriParts, array $options = []) {

        $this->setTimestamp(time());
        $this->setKey($auth->getKey());
        $this->setPassphrase($auth->getPassphrase());

        $data = $this->getTimestamp() . $method . '/' . implode('/', $uriParts);

        if (!empty($options)) {

            switch ($method) {

                case GDAXConstants::METHOD_POST:

                    $data .= json_encode($options);
                    break;

                case GDAXConstants::METHOD_GET;

                    $data .= '?' . http_build_query($options);
                    break;

            }

        }

        $hmac = hash_hmac('sha256', $data, base64_decode($auth->getSecret()), true);

        $this->setSignature(base64_encode($hmac));

    }

    /**
     * @return float|int
     */
    public function getTimestamp() {
        return $this->timestamp;
    }

    /**
     * @param float|int $timestamp
     *
     * @return RequestSigner
     */
    protected function setTimestamp($timestamp) {
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * @return array
     */
    public function getHeaders() {

        return [
            'CB-ACCESS-KEY'        => $this->getKey(),
            'CB-ACCESS-SIGN'       => $this->getSignature(),
            'CB-ACCESS-TIMESTAMP'  => $this->getTimestamp(),
            'CB-ACCESS-PASSPHRASE' => $this->getPassphrase(),
        ];

    }

    /**
     * @return string
     */
    public function getKey() {
        return $this->key;
    }

    /**
     * @param string $key
     *
     * @return RequestSigner
     */
    protected function setKey($key) {
        $this->key = $key;
        return $this;
    }

    /**
     * @return string
     */
    public function getSignature() {
        return $this->signature;
    }

    /**
     * @param string $signature
     *
     * @return RequestSigner
     */
    protected function setSignature($signature) {
        $this->signature = $signature;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassphrase() {
        return $this->passphrase;
    }

    /**
     * @param string $passphrase
     *
     * @return RequestSigner
     */
    protected function setPassphrase($passphrase) {
        $this->passphrase = $passphrase;
        return $this;
    }

    /**
     * @return array
     */
    public function getSignatureArray() {
        return [
            'signature'  => $this->getSignature(),
            'key'        => $this->getKey(),
            'passphrase' => $this->getPassphrase(),
            'timestamp'  => $this->getTimestamp(),
        ];
    }

}
