<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class AvailabilityCheckResult
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $DomainName;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\QualityType
     */
    public $Quality;
    /**
     * @var int
     */
    public $StatusCode;
    /**
     * @var string
     */
    public $StatusMessage;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setDomainName($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for DomainName');
        }
        $this->DomainName = $val;
    }

    /**
     * @param QualityType $val
     * @throws \Exception
     */
    public function setQuality($val)
    {
        $this->Quality = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setStatusCode($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->StatusCode = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setStatusMessage($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for StatusMessage');
        }
        $this->StatusMessage = $val;
    }
}
