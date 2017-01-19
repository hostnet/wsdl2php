<?php

class GetToken
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $Username;
	/**
	 * @var string
	 */
	public $Password;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setUsername($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Username');
        }
        $this->Username = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPassword($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Password');
        }
        $this->Password = $val;
	}
}

class GetTokenResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $GetTokenResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setGetTokenResult($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for GetTokenResult');
        }
        $this->GetTokenResult = $val;
	}
}

class GetToken2
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $Username;
	/**
	 * @var string
	 */
	public $Token;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setUsername($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Username');
        }
        $this->Username = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setToken($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Token');
        }
        $this->Token = $val;
	}
}

class GetToken2Response
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $GetToken2Result;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setGetToken2Result($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for GetToken2Result');
        }
        $this->GetToken2Result = $val;
	}
}

/**
 * SingleSignOnClient
 */
class SingleSignOnClient extends SoapClient {

	const WSDL_FILE = "SingleSignOn.wsdl";
	private $classmap = array(
        'GetToken' =>
            'GetToken',
        'GetTokenResponse' =>
            'GetTokenResponse',
        'GetToken2' =>
            'GetToken2',
        'GetToken2Response' =>
            'GetToken2Response',
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
	 * @param GetToken $parameters
	 * @return GetTokenResponse
	 */
	public function GetToken(GetToken $parameters) {
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
	 * @param GetToken2 $parameters
	 * @return GetToken2Response
	 */
	public function GetToken2(GetToken2 $parameters) {
        return $this->__soapCall(
            'GetToken2',
            array($parameters),
            array('uri'=>'http://api.nmbrs.nl/soap/v2.0/SingleSignOn')
        );
	}
}
