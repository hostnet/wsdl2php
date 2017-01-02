<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * SoapTestClient
 */
class SoapTestClient extends \SoapClient
{
    const WSDL_FILE = "AspDotNetRound2Test.wsdl";


    public function __construct(
        $wsdl = null,
        $options = array()
    ) {
        (isset($options['headers'])) {
            $this->__setSoapHeaders($options['headers']);
        }
        parent::__construct($wsdl ? $wsdl : __DIR__ . '/' . self::WSDL_FILE, $options);
    }

    /**
     * echoStructAsSimpleTypes
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SOAPStruct $inputStruct
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\list(string $outputString, int $outputInteger, float $outputFloat)
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
     * @param $inputString
     * @param $inputInteger
     * @param $inputFloat
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SOAPStruct
     */
    public function echoSimpleTypesAsStruct(
        $inputString, $inputInteger, $inputFloat
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
     * @return ArrayOfString
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
