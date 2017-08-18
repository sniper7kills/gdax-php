<?php

namespace GDAX\Security;

/**
 * Class Auth
 *
 * @author Benjamin Franke
 */
class Auth {

    /**
     * @var string
     */
    protected $key;

    /**
     * @var string
     */
    protected $secret;

    /**
     * @var string
     */
    protected $passphrase;

    /**
     * Auth constructor.
     *
     * @param string $key
     * @param string $secret
     * @param string $passphrase
     */
    public function __construct($key, $secret, $passphrase) {

        $this->setKey($key);
        $this->setSecret($secret);
        $this->setPassphrase($passphrase);

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
     * @return Auth
     */
    public function setKey($key) {
        $this->key = $key;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecret() {
        return $this->secret;
    }

    /**
     * @param string $secret
     *
     * @return Auth
     */
    public function setSecret($secret) {
        $this->secret = $secret;
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
     * @return Auth
     */
    public function setPassphrase($passphrase) {
        $this->passphrase = $passphrase;
        return $this;
    }

}
