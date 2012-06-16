<?php

/**
 * interopLabClient
 */
class interopLabClient extends SoapClient {

	const WSDL_FILE = "SoapLiteRound1Test.wsdl";

	public function __construct($wsdl = null, $options = array()) {
		if(isset($options['headers'])) {
			$this->__setSoapHeaders($options['headers']);
		}
		parent::__construct($wsdl ? $wsdl : self::WSDL_FILE, $options);
	}

	/**
	 * echoString
	 *
	 * @param $inputString
	 * @return string
	 */
	public function echoString($inputString) {
		return $this->__soapCall(
			'echoString',
			array($inputString),
			array('uri'=>'http://soapinterop.org/interop.wsdl')
		);
	}

	/**
	 * echoStringArray
	 *
	 * @param UNKNOWN $inputStringArray
	 * @return UNKNOWN
	 */
	public function echoStringArray(UNKNOWN $inputStringArray) {
		return $this->__soapCall(
			'echoStringArray',
			array($inputStringArray),
			array('uri'=>'http://soapinterop.org/interop.wsdl')
		);
	}

	/**
	 * echoInteger
	 *
	 * @param $inputInteger
	 * @return int
	 */
	public function echoInteger($inputInteger) {
		return $this->__soapCall(
			'echoInteger',
			array($inputInteger),
			array('uri'=>'http://soapinterop.org/interop.wsdl')
		);
	}

	/**
	 * echoIntegerArray
	 *
	 * @param UNKNOWN $inputIntegerArray
	 * @return UNKNOWN
	 */
	public function echoIntegerArray(UNKNOWN $inputIntegerArray) {
		return $this->__soapCall(
			'echoIntegerArray',
			array($inputIntegerArray),
			array('uri'=>'http://soapinterop.org/interop.wsdl')
		);
	}

	/**
	 * echoFloat
	 *
	 * @param $inputFloat
	 * @return float
	 */
	public function echoFloat($inputFloat) {
		return $this->__soapCall(
			'echoFloat',
			array($inputFloat),
			array('uri'=>'http://soapinterop.org/interop.wsdl')
		);
	}

	/**
	 * echoFloatArray
	 *
	 * @param UNKNOWN $inputFloatArray
	 * @return UNKNOWN
	 */
	public function echoFloatArray(UNKNOWN $inputFloatArray) {
		return $this->__soapCall(
			'echoFloatArray',
			array($inputFloatArray),
			array('uri'=>'http://soapinterop.org/interop.wsdl')
		);
	}

	/**
	 * echoStruct
	 *
	 * @param UNKNOWN $inputStruct
	 * @return UNKNOWN
	 */
	public function echoStruct(UNKNOWN $inputStruct) {
		return $this->__soapCall(
			'echoStruct',
			array($inputStruct),
			array('uri'=>'http://soapinterop.org/interop.wsdl')
		);
	}

	/**
	 * echoStructArray
	 *
	 * @param UNKNOWN $inputStructArray
	 * @return UNKNOWN
	 */
	public function echoStructArray(UNKNOWN $inputStructArray) {
		return $this->__soapCall(
			'echoStructArray',
			array($inputStructArray),
			array('uri'=>'http://soapinterop.org/interop.wsdl')
		);
	}

	/**
	 * echoVoid
	 *
	 * @param 
	 * @return void
	 */
	public function echoVoid() {
		return $this->__soapCall(
			'echoVoid',
			array(),
			array('uri'=>'http://soapinterop.org/interop.wsdl')
		);
	}

}
