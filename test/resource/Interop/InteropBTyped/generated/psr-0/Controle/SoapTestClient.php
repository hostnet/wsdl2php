<?php

namespace Controle;

/**
 * SoapTestClient
 */
class SoapTestClient extends \SoapClient {

	const WSDL_FILE = "InteropBtyped.wsdl";

	public function __construct($wsdl = null, $options = array()) {
        (isset($options['headers'])) {
            $this->__setSoapHeaders($options['headers']);
        }
        parent::__construct($wsdl ? $wsdl : __DIR__ . '/' . self::WSDL_FILE, $options);
	}

	/**
	 * echoStructAsSimpleTypes
	 *
	 * @param \Controle\SOAPStruct $inputStruct
	 * @return \Controle\list(anyType $outputString, anyType $outputInteger, anyType $outputFloat)
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
	 * @param \Controle\anyType $inputString
	 * @param \Controle\anyType $inputInteger
	 * @param \Controle\anyType $inputFloat
	 * @return \Controle\SOAPStruct
	 */
	public function echoSimpleTypesAsStruct(\Controle\anyType $inputString, \Controle\anyType $inputInteger, \Controle\anyType $inputFloat) {
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
