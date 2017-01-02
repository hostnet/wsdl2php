<?php

/**
 * EmptySAClient
 */
class EmptySAClient extends SoapClient {

	const WSDL_FILE = "EmptySATest.wsdl";

	public function __construct($wsdl = null, $options = array()) {
        (isset($options['headers'])) {
            $this->__setSoapHeaders($options['headers']);
        }
        parent::__construct($wsdl ? $wsdl : __DIR__ . '/' . self::WSDL_FILE, $options);
	}

	/**
	 * echoString
	 *
	 * @param $a
	 * @return string
	 */
	public function echoString($a) {
        return $this->__soapCall(
            'echoString',
            array($a),
            array('uri'=>'http://soapinterop/')
        );
	}
}
