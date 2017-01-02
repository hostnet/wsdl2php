<?php

namespace Controle\sub1\sub2;

/**
 * SoapTestClient
 */
class SoapTestClient extends \SoapClient {

	const WSDL_FILE = "AspDotNetRound2Test.wsdl";

	public function __construct($wsdl = null, $options = array()) {
        (isset($options['headers'])) {
            $this->__setSoapHeaders($options['headers']);
        }
        parent::__construct($wsdl ? $wsdl : __DIR__ . '/' . self::WSDL_FILE, $options);
	}

	/**
	 * echoStructAsSimpleTypes
	 *
	 * @param \Controle\sub1\sub2\SOAPStruct $inputStruct
	 * @return \Controle\sub1\sub2\list(string $outputString, int $outputInteger, float $outputFloat)
	 */
	public function echoStructAsSimpleTypes(\Controle\sub1\sub2\SOAPStruct $inputStruct) {
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
	 * @return \Controle\sub1\sub2\SOAPStruct
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
	 * @param \Controle\sub1\sub2\SOAPStructStruct $inputStruct
	 * @return \Controle\sub1\sub2\SOAPStructStruct
	 */
	public function echoNestedStruct(\Controle\sub1\sub2\SOAPStructStruct $inputStruct) {
        return $this->__soapCall(
            'echoNestedStruct',
            array($inputStruct),
            array('uri'=>'http://soapinterop.org/')
        );
	}

	/**
	 * echoNestedArray
	 *
	 * @param \Controle\sub1\sub2\SOAPArrayStruct $inputStruct
	 * @return \Controle\sub1\sub2\SOAPArrayStruct
	 */
	public function echoNestedArray(\Controle\sub1\sub2\SOAPArrayStruct $inputStruct) {
        return $this->__soapCall(
            'echoNestedArray',
            array($inputStruct),
            array('uri'=>'http://soapinterop.org/')
        );
	}
}
