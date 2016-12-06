<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ErrorParameterType
 * A variable that contains specific information about the context of this error. For example,
 * if you pass in an attribute set ID that does not match the specified category, the attribute
 * set ID might be returned as an error parameter. Use error parameters to flag fields that
 * users need to correct. Also use error parameters to distinguish between errors when multiple errors
 * are returned.
 */
class ErrorParameterType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | Specifies the value for the property.
     */
    public $Value;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @var string
     */
    public $ParamID;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setValue($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Value');
        }
        $this->Value = $val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setParamID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ParamID');
        }
        $this->ParamID = $val;
    }
}
