<?php

namespace Controle\Hostnet\Namesp;

/**
 * SoapTestClient
 */
class SoapTestClient extends \SoapClient
{
    const WSDL_FILE = "InteropBtyped.wsdl";

    private $classmap = array(
        'SOAPStruct\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SoApStruct',
        'SOAPStructStruct\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SoApStructStruct',
        'SOAPArrayStruct\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SoApArrayStruct',
    );

    public function __construct(
        $wsdl = null,
        $options = array()
    ) {
        foreach ($this->classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        if (isset($options['headers'])) {
            $this->__setSoapHeaders($options['headers']);
        }
        parent::__construct($wsdl ? $wsdl : self::WSDL_FILE, $options);
    }

    /**
     * echoStructAsSimpleTypes
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SOAPStruct $inputStruct
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\list(anyType $outputString, anyType $outputInteger, anyType $outputFloat)
     */
    public function echoStructAsSimpleTypes(
        \Controle\Hostnet\Namesp\Sub4\Complex\SOAPStruct $inputStruct
    ) {
        return $this->__soapCall(
            'echoStructAsSimpleTypes',
            array($inputStruct),
            array('uri'=>'http://soapinterop.org/')
        );
    }

    /**
     * echoSimpleTypesAsStruct
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\anyType $inputString
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\anyType $inputInteger
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\anyType $inputFloat
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SOAPStruct
     */
    public function echoSimpleTypesAsStruct(
        \Controle\Hostnet\Namesp\Sub4\Complex\anyType $inputString, \Controle\Hostnet\Namesp\Sub4\Complex\anyType $inputInteger, \Controle\Hostnet\Namesp\Sub4\Complex\anyType $inputFloat
    ) {
        return $this->__soapCall(
            'echoSimpleTypesAsStruct',
            array(
            $inputString,
            $inputInteger,
            $inputFloat
                ),
            array('uri'=>'http://soapinterop.org/')
        );
    }

    /**
     * echo2DStringArray
     *
     * @param $input2DStringArray
     * @return ArrayOfString2D
     */
    public function echo2DStringArray(
        $input2DStringArray
    ) {
        return $this->__soapCall(
            'echo2DStringArray',
            array($input2DStringArray),
            array('uri'=>'http://soapinterop.org/')
        );
    }

    /**
     * echoNestedStruct
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SOAPStructStruct $inputStruct
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SOAPStructStruct
     */
    public function echoNestedStruct(
        \Controle\Hostnet\Namesp\Sub4\Complex\SOAPStructStruct $inputStruct
    ) {
        return $this->__soapCall(
            'echoNestedStruct',
            array($inputStruct),
            array('uri'=>'http://soapinterop.org/')
        );
    }

    /**
     * echoNestedArray
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SOAPArrayStruct $inputStruct
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SOAPArrayStruct
     */
    public function echoNestedArray(
        \Controle\Hostnet\Namesp\Sub4\Complex\SOAPArrayStruct $inputStruct
    ) {
        return $this->__soapCall(
            'echoNestedArray',
            array($inputStruct),
            array('uri'=>'http://soapinterop.org/')
        );
    }
}
