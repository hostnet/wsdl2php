<?php

namespace Controle;

/**
 * SingleSignOnClient
 */
class SingleSignOnClient extends \SoapClient {

	const WSDL_FILE = "SingleSignOn.wsdl";
	private $classmap = array(
        'GetTokenResponse' =>
            '\Controle\sub1\sub2\GetTokenResponse',
        'GetToken2Response' =>
            '\Controle\sub1\sub2\GetToken2Response',
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
        parent::__construct($wsdl ? $wsdl : __DIR__ . '/' . self::WSDL_FILE, $options);
	}

	/**
	 * GetToken
	 * Get token for user. Valid for 30 seconds
	 *
	 * @param \Controle\sub1\sub2\GetToken $parameters
	 * @return \Controle\sub1\sub2\GetTokenResponse
	 */
	public function GetToken(\Controle\sub1\sub2\GetToken $parameters) {
        return $this->__soapCall(
            'GetToken',
            array($parameters),
            array('uri'=>'http://api.nmbrs.nl/soap/v2.0/SingleSignOn')
        );
	}

	/**
	 * GetToken2
	 * Get token for user, by API token. Valid for 30 seconds
	 *
	 * @param \Controle\sub1\sub2\GetToken2 $parameters
	 * @return \Controle\sub1\sub2\GetToken2Response
	 */
	public function GetToken2(\Controle\sub1\sub2\GetToken2 $parameters) {
        return $this->__soapCall(
            'GetToken2',
            array($parameters),
            array('uri'=>'http://api.nmbrs.nl/soap/v2.0/SingleSignOn')
        );
	}
}
