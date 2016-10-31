<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ErrorType
 * These are request errors (as opposed to system errors) that occur due to problems with business-level
 * data (e.g., an invalid combination of arguments) that the application passed in.
 */
class ErrorType
{
    /**
     * @var string | Brief version of the tip message.
     */
    public $shortmessage;
    /**
     * @var string | Detailed version of the tip message.
     */
    public $longmessage;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\token | Reason for SMS subscription error (postback from thired-party integrator).
     */
    public $errorcode;
    /**
     * @var boolean | Indicates whether the error message text is intended to be displayed to an end user or
     * intended only to be parsed by the application. If true or not present (the default), the
     * message text is intended for the end user. If false, the message text is intended for the
     * application, and the application should translate the error into a more appropriate
     * message. Only applicable to Item Specifics errors and warnings returned from listing
     * requests.
     */
    public $userdisplayhint;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SeverityCodeType | Indicates whether the error is a severe error (causing the request to fail) or an informational
     * error (a warning) that should be communicated to the user.
     */
    public $severitycode;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ErrorParameterType | This optional element carries a list of context-specific error variables that indicate
     * details about the error condition. These are useful when multiple instances of ErrorType
     * are returned.
     */
    public $errorparameters;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ErrorClassificationCodeType | API errors are divided between two classes: system errors and request errors.
     */
    public $errorclassification;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setShortMessage($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ShortMessage');
        }
        $this->shortmessage = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setLongMessage($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for LongMessage');
        }
        $this->longmessage = (int)$val;
    }

    /**
     * @param token $val
     * @throws Exception
     */
    public function setErrorCode($val)
    {
        $this->errorcode = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setUserDisplayHint($val)
    {
        $this->userdisplayhint = (int)$val;
    }

    /**
     * @param SeverityCodeType $val
     * @throws Exception
     */
    public function setSeverityCode($val)
    {
        $this->severitycode = (int)$val;
    }

    /**
     * @param ErrorParameterType $val
     * @throws Exception
     */
    public function setErrorParameters($val)
    {
        $this->errorparameters = (int)$val;
    }

    /**
     * @param ErrorClassificationCodeType $val
     * @throws Exception
     */
    public function setErrorClassification($val)
    {
        $this->errorclassification = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }
}
