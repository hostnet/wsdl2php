<?php

class SOAPStruct {
	/**
	 * @var string
	 */
	public $varString;
	/**
	 * @var int
	 */
	public $varInt;
	/**
	 * @var float
	 */
	public $varFloat;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setVarString($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for varString');
		$this->varString = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setVarInt($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->varInt = (int)$val;
	}

	/**
	 * @param float $val
	 * @throws Exception
	 */
	public function setVarFloat($val) {
		
		$this->varFloat = (int)$val;
	}

}

/**
 * InteropClient
 */
class InteropClient extends SoapClient {

	const WSDL_FILE = "InteropTyped.wsdl";
	private $classmap = array(
		'SOAPStruct' => 'SOAPStruct',
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
	 * echoBase64
	 *
	 * @param anyType $inputBase64
	 * @return anyType
	 */
	public function echoBase64(anyType $inputBase64) {
		return $this->__soapCall(
			'echoBase64',
			array($inputBase64),
			array('uri'=>'http://tempuri.org/wsdl/')
		);
	}

	/**
	 * echoDate
	 *
	 * @param anyType $inputDate
	 * @return anyType
	 */
	public function echoDate(anyType $inputDate) {
		return $this->__soapCall(
			'echoDate',
			array($inputDate),
			array('uri'=>'http://tempuri.org/wsdl/')
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
			array('uri'=>'http://tempuri.org/wsdl/')
		);
	}

	/**
	 * NoSuchMethod
	 *
	 * @param 
	 * @return void
	 */
	public function NoSuchMethod() {
		return $this->__soapCall(
			'NoSuchMethod',
			array(),
			array('uri'=>'http://tempuri.org/wsdl/')
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
			array('uri'=>'http://tempuri.org/wsdl/')
		);
	}

	/**
	 * echoStruct
	 *
	 * @param SOAPStruct $inputStruct
	 * @return SOAPStruct
	 */
	public function echoStruct(SOAPStruct $inputStruct) {
		return $this->__soapCall(
			'echoStruct',
			array($inputStruct),
			array('uri'=>'http://tempuri.org/wsdl/')
		);
	}

	/**
	 * echoFloatArray
	 *
	 * @param $inputFloatArray
	 * @return ArrayOffloat
	 */
	public function echoFloatArray($inputFloatArray) {
		return $this->__soapCall(
			'echoFloatArray',
			array($inputFloatArray),
			array('uri'=>'http://tempuri.org/wsdl/')
		);
	}

	/**
	 * echoFloat
	 *
	 * @param anyType $inputFloat
	 * @return anyType
	 */
	public function echoFloat(anyType $inputFloat) {
		return $this->__soapCall(
			'echoFloat',
			array($inputFloat),
			array('uri'=>'http://tempuri.org/wsdl/')
		);
	}

	/**
	 * echoIntegerArray
	 *
	 * @param $inputIntegerArray
	 * @return ArrayOfint
	 */
	public function echoIntegerArray($inputIntegerArray) {
		return $this->__soapCall(
			'echoIntegerArray',
			array($inputIntegerArray),
			array('uri'=>'http://tempuri.org/wsdl/')
		);
	}

	/**
	 * echoInteger
	 *
	 * @param anyType $inputInteger
	 * @return anyType
	 */
	public function echoInteger(anyType $inputInteger) {
		return $this->__soapCall(
			'echoInteger',
			array($inputInteger),
			array('uri'=>'http://tempuri.org/wsdl/')
		);
	}

	/**
	 * echoStringArray
	 *
	 * @param $inputStringArray
	 * @return ArrayOfstring
	 */
	public function echoStringArray($inputStringArray) {
		return $this->__soapCall(
			'echoStringArray',
			array($inputStringArray),
			array('uri'=>'http://tempuri.org/wsdl/')
		);
	}

	/**
	 * echoString
	 *
	 * @param anyType $inputString
	 * @return anyType
	 */
	public function echoString(anyType $inputString) {
		return $this->__soapCall(
			'echoString',
			array($inputString),
			array('uri'=>'http://tempuri.org/wsdl/')
		);
	}

	/**
	 * echoDecimal
	 *
	 * @param anyType $inputDecimal
	 * @return anyType
	 */
	public function echoDecimal(anyType $inputDecimal) {
		return $this->__soapCall(
			'echoDecimal',
			array($inputDecimal),
			array('uri'=>'http://tempuri.org/wsdl/')
		);
	}

	/**
	 * echoBoolean
	 *
	 * @param $inputBoolean
	 * @return anyType
	 */
	public function echoBoolean($inputBoolean) {
		return $this->__soapCall(
			'echoBoolean',
			array($inputBoolean),
			array('uri'=>'http://tempuri.org/wsdl/')
		);
	}

}
