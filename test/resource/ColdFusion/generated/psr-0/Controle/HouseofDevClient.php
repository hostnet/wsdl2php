<?php

namespace Controle;
/**
 * HouseofDevClient
 * http://ws.houseofdev.com/cfcs/ws.cfc?wsdl
 */
class HouseofDevClient extends \SoapClient {

	const WSDL_FILE = "ComicsWebServiceTest.wsdl";

	public function __construct($wsdl = null, $options = array()) {
		if(isset($options['headers'])) {
			$this->__setSoapHeaders($options['headers']);
		}
		parent::__construct($wsdl ? $wsdl : self::WSDL_FILE, $options);
	}

	/**
	 * getComics
	 *
	 * @param 
	 * @return string
	 */
	public function getComics() {
		return $this->__soapCall(
			'getComics',
			array(),
			array('uri'=>'http://cfcs')
		);
	}

}
