<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class DnsSecKey
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $Handle;
    /**
     * @var string
     */
    public $Status;
    /**
     * @var string
     */
    public $DigestAlgorithm;
    /**
     * @var string
     */
    public $DigestType;
    /**
     * @var string
     */
    public $Digest;
    /**
     * @var string
     */
    public $Protocol;
    /**
     * @var string
     */
    public $KeyType;
    /**
     * @var string
     */
    public $KeyAlgorithm;
    /**
     * @var string
     */
    public $KeyTag;
    /**
     * @var string
     */
    public $PublicKey;
    /**
     * @var string
     */
    public $CreDate;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setHandle($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Handle');
        }
        $this->Handle = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setStatus($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Status');
        }
        $this->Status = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setDigestAlgorithm($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for DigestAlgorithm');
        }
        $this->DigestAlgorithm = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setDigestType($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for DigestType');
        }
        $this->DigestType = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setDigest($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Digest');
        }
        $this->Digest = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setProtocol($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Protocol');
        }
        $this->Protocol = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setKeyType($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for KeyType');
        }
        $this->KeyType = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setKeyAlgorithm($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for KeyAlgorithm');
        }
        $this->KeyAlgorithm = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setKeyTag($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for KeyTag');
        }
        $this->KeyTag = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setPublicKey($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for PublicKey');
        }
        $this->PublicKey = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setCreDate($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for CreDate');
        }
        $this->CreDate = $val;
    }
}
