<?php

namespace Controle;

/**
 * SoapTestClient
 */
class SoapTestClient extends \SoapClient {

	const WSDL_FILE = "InteropBtyped.wsdl";
	private $classmap = array(
		'SOAPStruct' => '\Controle\sub1\sub2\SOAPStruct',
		'SOAPStructStruct' => '\Controle\sub1\sub2\SOAPStructStruct',
		'SOAPArrayStruct' => '\Controle\sub1\sub2\SOAPArrayStruct',
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
	 * @param \Controle\sub1\sub2\SOAPStruct $inputStruct
	 * @return \Controle\sub1\sub2\list(anyType $outputString, anyType $outputInteger, anyType $outputFloat)
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
	 * @param \Controle\sub1\sub2\anyType $inputString
	 * @param \Controle\sub1\sub2\anyType $inputInteger
	 * @param \Controle\sub1\sub2\anyType $inputFloat
	 * @return \Controle\sub1\sub2\SOAPStruct
	 */
	public function echoSimpleTypesAsStruct(\Controle\sub1\sub2\anyType $inputString, \Controle\sub1\sub2\anyType $inputInteger, \Controle\sub1\sub2\anyType $inputFloat) {
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
