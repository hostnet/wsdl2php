<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class ReturnIndicator
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $ResponseText;
    /**
     * @var int
     */
    public $ResponseCode;
    /**
     * @var string
     */
    public $LastMailServer;
    /**
     * @var boolean
     */
    public $GoodEmail;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setResponseText($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ResponseText');
        }
        $this->ResponseText = (string)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setResponseCode($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->ResponseCode = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setLastMailServer($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for LastMailServer');
        }
        $this->LastMailServer = (string)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setGoodEmail($val)
    {
        $this->GoodEmail = (boolean)$val;
    }
}
