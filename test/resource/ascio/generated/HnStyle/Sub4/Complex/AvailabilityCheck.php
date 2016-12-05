<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class AvailabilityCheck
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $sessionId;
    /**
     * @var String[]
     */
    public $domains;
    /**
     * @var String[]
     */
    public $tlds;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\QualityType
     */
    public $quality;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSessionId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = ()$val;
    }

    /**
     * @param ArrayOfString $val
     * @throws Exception
     */
    public function setDomains($val)
    {
        $this->domains = ()$val;
    }

    /**
     * @param ArrayOfString $val
     * @throws Exception
     */
    public function setTlds($val)
    {
        $this->tlds = ()$val;
    }

    /**
     * @param QualityType $val
     * @throws Exception
     */
    public function setQuality($val)
    {
        $this->quality = ()$val;
    }
}
