<?php

namespace Controle\sub1\sub2;

/**
 * InteropClient
 */
class InteropClient extends \SoapClient {

	const WSDL_FILE = "InteropTyped.wsdl";

	public function __construct($wsdl = null, $options = array()) {
        (isset($options['headers'])) {
            $this->__setSoapHeaders($options['headers']);
        }
        parent::__construct($wsdl ? $wsdl : __DIR__ . '/' . self::WSDL_FILE, $options);
	}

	/**
	 * echoBase64
	 *
	 * @param \Controle\sub1\sub2\anyType $inputBase64
	 * @return \Controle\sub1\sub2\anyType
	 */
	public function echoBase64(\Controle\sub1\sub2\anyType $inputBase64) {
        return $this->__soapCall(
            'echoBase64',
            array($inputBase64),
            array('uri'=>'http://tempuri.org/wsdl/')
        );
	}

	/**
	 * echoDate
	 *
	 * @param \Controle\sub1\sub2\anyType $inputDate
	 * @return \Controle\sub1\sub2\anyType
	 */
	public function echoDate(\Controle\sub1\sub2\anyType $inputDate) {
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
	 * @param \Controle\sub1\sub2\SOAPStruct $inputStruct
	 * @return \Controle\sub1\sub2\SOAPStruct
	 */
	public function echoStruct(\Controle\sub1\sub2\SOAPStruct $inputStruct) {
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
	 * @param \Controle\sub1\sub2\anyType $inputFloat
	 * @return \Controle\sub1\sub2\anyType
	 */
	public function echoFloat(\Controle\sub1\sub2\anyType $inputFloat) {
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
	 * @param \Controle\sub1\sub2\anyType $inputInteger
	 * @return \Controle\sub1\sub2\anyType
	 */
	public function echoInteger(\Controle\sub1\sub2\anyType $inputInteger) {
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
	 * @param \Controle\sub1\sub2\anyType $inputString
	 * @return \Controle\sub1\sub2\anyType
	 */
	public function echoString(\Controle\sub1\sub2\anyType $inputString) {
        return $this->__soapCall(
            'echoString',
            array($inputString),
            array('uri'=>'http://tempuri.org/wsdl/')
        );
	}

	/**
	 * echoDecimal
	 *
	 * @param \Controle\sub1\sub2\anyType $inputDecimal
	 * @return \Controle\sub1\sub2\anyType
	 */
	public function echoDecimal(\Controle\sub1\sub2\anyType $inputDecimal) {
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
	 * @return \Controle\sub1\sub2\anyType
	 */
	public function echoBoolean($inputBoolean) {
        return $this->__soapCall(
            'echoBoolean',
            array($inputBoolean),
            array('uri'=>'http://tempuri.org/wsdl/')
        );
	}
}
