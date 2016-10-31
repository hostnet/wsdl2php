<?php

namespace Controle;

class AvailabilityCheckResult
{
    /**
     * @var string
     */
    public $domainname;
    /**
     * @var \Controle\QualityType
     */
    public $quality;
    /**
     * @var int
     */
    public $statuscode;
    /**
     * @var string
     */
    public $statusmessage;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setDomainName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DomainName');
        }
        $this->domainname = (int)$val;
    }

    /**
     * @param QualityType $val
     * @throws Exception
     */
    public function setQuality($val)
    {
        $this->quality = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setStatusCode($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->statuscode = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setStatusMessage($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for StatusMessage');
        }
        $this->statusmessage = (int)$val;
    }
}
