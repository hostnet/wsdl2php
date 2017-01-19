<?php

namespace Controle;

/**
 * InteropLabClient
 */
class InteropLabClient extends \SoapClient {

	const WSDL_FILE = "SoapLiteRound1Test.wsdl";

	public function __construct($wsdl = null, $options = array()) {
        (isset($options['headers'])) {
            $this->__setSoapHeaders($options['headers']);
        }
        parent::__construct($wsdl ? $wsdl : __DIR__ . '/' . self::WSDL_FILE, $options);
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
	 * @param \Controle\sub1\sub2\UNKNOWN $inputStringArray
	 * @return \Controle\sub1\sub2\UNKNOWN
	 */
	public function echoStringArray(\Controle\sub1\sub2\UNKNOWN $inputStringArray) {
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
	 * @param \Controle\sub1\sub2\UNKNOWN $inputIntegerArray
	 * @return \Controle\sub1\sub2\UNKNOWN
	 */
	public function echoIntegerArray(\Controle\sub1\sub2\UNKNOWN $inputIntegerArray) {
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
	 * @param \Controle\sub1\sub2\UNKNOWN $inputFloatArray
	 * @return \Controle\sub1\sub2\UNKNOWN
	 */
	public function echoFloatArray(\Controle\sub1\sub2\UNKNOWN $inputFloatArray) {
        return $this->__soapCall(
            'echoFloatArray',
            array($inputFloatArray),
            array('uri'=>'http://soapinterop.org/interop.wsdl')
        );
	}

	/**
	 * echoStruct
	 *
	 * @param \Controle\sub1\sub2\UNKNOWN $inputStruct
	 * @return \Controle\sub1\sub2\UNKNOWN
	 */
	public function echoStruct(\Controle\sub1\sub2\UNKNOWN $inputStruct) {
        return $this->__soapCall(
            'echoStruct',
            array($inputStruct),
            array('uri'=>'http://soapinterop.org/interop.wsdl')
        );
	}

	/**
	 * echoStructArray
	 *
	 * @param \Controle\sub1\sub2\UNKNOWN $inputStructArray
	 * @return \Controle\sub1\sub2\UNKNOWN
	 */
	public function echoStructArray(\Controle\sub1\sub2\UNKNOWN $inputStructArray) {
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
