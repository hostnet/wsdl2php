<?php

namespace Controle;

/**
 * SimpleTestClient
 * These operations implement some simple Section 5, rpc-style SOAP operations, for interop
 * testing. Please email johnko@microsoft.com with any  questions.
 */
class SimpleTestClient extends \SoapClient {

	const WSDL_FILE = "AspDotNetRound1Test.wsdl";
	private $classmap = array(
		'SOAPStruct' => '\Controle\sub1\sub2\SOAPStruct',
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
	 * echoVoid
	 *
	 * @param 
	 * @return void
	 */
	public function echoVoid() {
		return $this->__soapCall(
			'echoVoid',
			array(),
			array('uri'=>'http://soapinterop.org/')
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
			array('uri'=>'http://soapinterop.org/')
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
			array('uri'=>'http://soapinterop.org/')
		);
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
			array('uri'=>'http://soapinterop.org/')
		);
	}

	/**
	 * echoBase64
	 *
	 * @param $inputBase64
	 * @return base64Binary
	 */
	public function echoBase64($inputBase64) {
		return $this->__soapCall(
			'echoBase64',
			array($inputBase64),
			array('uri'=>'http://soapinterop.org/')
		);
	}

	/**
	 * echoDate
	 *
	 * @param $inputDate
	 * @return dateTime
	 */
	public function echoDate($inputDate) {
		return $this->__soapCall(
			'echoDate',
			array($inputDate),
			array('uri'=>'http://soapinterop.org/')
		);
	}

	/**
	 * echoStruct
	 *
	 * @param \Controle\sub1\sub2\SOAPStruct $inputStruct
	 * @return \Controle\sub1\sub2\SOAPStruct
	 */
	public function echoStruct(\Controle\sub1\sub2\SOAPStruct $inputStruct) {
		return $this->__soapCall(
			'echoStruct',
			array($inputStruct),
			array('uri'=>'http://soapinterop.org/')
		);
	}

	/**
	 * echoIntegerArray
	 *
	 * @param $inputIntegerArray
	 * @return ArrayOfInt
	 */
	public function echoIntegerArray($inputIntegerArray) {
		return $this->__soapCall(
			'echoIntegerArray',
			array($inputIntegerArray),
			array('uri'=>'http://soapinterop.org/')
		);
	}

	/**
	 * echoFloatArray
	 *
	 * @param $inputFloatArray
	 * @return ArrayOfFloat
	 */
	public function echoFloatArray($inputFloatArray) {
		return $this->__soapCall(
			'echoFloatArray',
			array($inputFloatArray),
			array('uri'=>'http://soapinterop.org/')
		);
	}

	/**
	 * echoStringArray
	 *
	 * @param $inputStringArray
	 * @return ArrayOfString
	 */
	public function echoStringArray($inputStringArray) {
		return $this->__soapCall(
			'echoStringArray',
			array($inputStringArray),
			array('uri'=>'http://soapinterop.org/')
		);
	}

	/**
	 * echoStructArray
	 *
	 * @param $inputStructArray
	 * @return ArrayOfSOAPStruct
	 */
	public function echoStructArray($inputStructArray) {
		return $this->__soapCall(
			'echoStructArray',
			array($inputStructArray),
			array('uri'=>'http://soapinterop.org/')
		);
	}

	/**
	 * echoDecimal
	 *
	 * @param $inputDecimal
	 * @return decimal
	 */
	public function echoDecimal($inputDecimal) {
		return $this->__soapCall(
			'echoDecimal',
			array($inputDecimal),
			array('uri'=>'http://soapinterop.org/')
		);
	}

	/**
	 * echoBoolean
	 *
	 * @param $inputBoolean
	 * @return boolean
	 */
	public function echoBoolean($inputBoolean) {
		return $this->__soapCall(
			'echoBoolean',
			array($inputBoolean),
			array('uri'=>'http://soapinterop.org/')
		);
	}

	/**
	 * echoHexBinary
	 *
	 * @param $inputHexBinary
	 * @return hexBinary
	 */
	public function echoHexBinary($inputHexBinary) {
		return $this->__soapCall(
			'echoHexBinary',
			array($inputHexBinary),
			array('uri'=>'http://soapinterop.org/')
		);
	}

}
