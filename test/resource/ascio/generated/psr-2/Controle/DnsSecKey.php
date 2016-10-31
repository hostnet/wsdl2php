<?php

namespace Controle;

class DnsSecKey
{
    /**
     * @var string
     */
    public $handle;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $digestalgorithm;
    /**
     * @var string
     */
    public $digesttype;
    /**
     * @var string
     */
    public $digest;
    /**
     * @var string
     */
    public $protocol;
    /**
     * @var string
     */
    public $keytype;
    /**
     * @var string
     */
    public $keyalgorithm;
    /**
     * @var string
     */
    public $keytag;
    /**
     * @var string
     */
    public $publickey;
    /**
     * @var string
     */
    public $credate;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setHandle($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Handle');
        }
        $this->handle = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setStatus($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Status');
        }
        $this->status = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setDigestAlgorithm($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DigestAlgorithm');
        }
        $this->digestalgorithm = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setDigestType($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DigestType');
        }
        $this->digesttype = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setDigest($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Digest');
        }
        $this->digest = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setProtocol($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Protocol');
        }
        $this->protocol = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setKeyType($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for KeyType');
        }
        $this->keytype = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setKeyAlgorithm($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for KeyAlgorithm');
        }
        $this->keyalgorithm = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setKeyTag($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for KeyTag');
        }
        $this->keytag = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setPublicKey($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for PublicKey');
        }
        $this->publickey = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCreDate($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CreDate');
        }
        $this->credate = (int)$val;
    }
}
