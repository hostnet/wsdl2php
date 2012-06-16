<?php

namespace Controle;
/**
 * ErrorType
 * These are request errors (as opposed to system errors) that occur due to problems with business-level
 * data (e.g., an invalid combination of arguments) that the application passed in.
 */
class ErrorType {
    /**
     * @var string | Brief version of the tip message.
     */
    public $ShortMessage;
    /**
     * @var string | Detailed version of the tip message.
     */
    public $LongMessage;
    /**
     * @var \Controle\token | Reason for SMS subscription error (postback from thired-party integrator).
     */
    public $ErrorCode;
    /**
     * @var boolean | Indicates whether the error message text is intended to be displayed to an end user or
     * intended only to be parsed by the application. If true or not present (the default), the
     * message text is intended for the end user. If false, the message text is intended for the
     * application, and the application should translate the error into a more appropriate
     * message. Only applicable to Item Specifics errors and warnings returned from listing
     * requests.
     */
    public $UserDisplayHint;
    /**
     * @var \Controle\SeverityCodeType | Indicates whether the error is a severe error (causing the request to fail) or an informational
     * error (a warning) that should be communicated to the user.
     */
    public $SeverityCode;
    /**
     * @var \Controle\ErrorParameterType | This optional element carries a list of context-specific error variables that indicate
     * details about the error condition. These are useful when multiple instances of ErrorType
     * are returned.
     */
    public $ErrorParameters;
    /**
     * @var \Controle\ErrorClassificationCodeType | API errors are divided between two classes: system errors and request errors.
     */
    public $ErrorClassification;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}

