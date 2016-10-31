<?php

namespace Controle;

class ReturnIndicator
{
    /**
     * @var string
     */
    public $responsetext;
    /**
     * @var int
     */
    public $responsecode;
    /**
     * @var string
     */
    public $lastmailserver;
    /**
     * @var boolean
     */
    public $goodemail;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setResponseText($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ResponseText');
        }
        $this->responsetext = (int)$val;
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
        $this->responsecode = (int)$val;
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
        $this->lastmailserver = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setGoodEmail($val)
    {
        $this->goodemail = (int)$val;
    }
}
