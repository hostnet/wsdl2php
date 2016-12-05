<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * FaultDetailsType
 * SOAP faults are used to indicate that an infrastructure error has occurred,
 * such as a problem on eBay's side with database or server going down, or a             problem
 * with the client or server-side SOAP framework.
 */
class FaultDetailsType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | Reason for SMS subscription error (postback from thired-party integrator).
     */
    public $ErrorCode;
    /**
     * @var string | Indicates whether the error is a severe error (causing the request to fail)
     *           or an informational error (a warning).
     */
    public $Severity;
    /**
     * @var string | Description of the condition that caused the SOAP fault.
     */
    public $DetailedMessage;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setErrorCode($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ErrorCode');
        }
        $this->ErrorCode = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSeverity($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Severity');
        }
        $this->Severity = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setDetailedMessage($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DetailedMessage');
        }
        $this->DetailedMessage = (string)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (<anyXML>)$val;
    }
}
