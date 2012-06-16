<?php

namespace Controle;

/**
 * SoapTestClient
 */
class SoapTestClient extends \SoapClient {

    const WSDL_FILE = "AspDotNetRound2Test.wsdl";
    private $classmap = array(
        'SOAPStruct' => '\Controle\SOAPStruct',
        'SOAPStructStruct' => '\Controle\SOAPStructStruct',
        'SOAPArrayStruct' => '\Controle\SOAPArrayStruct',
    );

    public function __construct($wsdl = null, $options = array()) {
        foreach($this->classmap as $key => $value) {
            if(!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        if(isset($options['headers'])) {
            $this->__setSoapHeaders($options['headers']);
        }
        parent::__construct($wsdl ? $wsdl : self::WSDL_FILE, $options);
    }

    /**
     * echoStructAsSimpleTypes
     *
     * @param \Controle\SOAPStruct $inputStruct
     * @return \Controle\list(string $outputString, int $outputInteger, float $outputFloat)
     */
    public function echoStructAsSimpleTypes(\Controle\SOAPStruct $inputStruct) {
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
     * @return \Controle\SOAPStruct
     */
    public function echoSimpleTypesAsStruct($inputString, $inputInteger, $inputFloat) {
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
    public function echo2DStringArray($input2DStringArray) {
        return $this->__soapCall(
            'echo2DStringArray',
            array($input2DStringArray),
            array('uri'=>'http://soapinterop.org/')
        );
    }

    /**
     * echoNestedStruct
     *
     * @param \Controle\SOAPStructStruct $inputStruct
     * @return \Controle\SOAPStructStruct
     */
    public function echoNestedStruct(\Controle\SOAPStructStruct $inputStruct) {
        return $this->__soapCall(
            'echoNestedStruct',
            array($inputStruct),
            array('uri'=>'http://soapinterop.org/')
        );
    }

    /**
     * echoNestedArray
     *
     * @param \Controle\SOAPArrayStruct $inputStruct
     * @return \Controle\SOAPArrayStruct
     */
    public function echoNestedArray(\Controle\SOAPArrayStruct $inputStruct) {
        return $this->__soapCall(
            'echoNestedArray',
            array($inputStruct),
            array('uri'=>'http://soapinterop.org/')
        );
    }

}
