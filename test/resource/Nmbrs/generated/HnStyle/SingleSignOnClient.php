<?php

namespace Controle\Hostnet\Namesp;

/**
 * SingleSignOnClient
 */
class SingleSignOnClient extends \SoapClient
{
    const WSDL_FILE = "SingleSignOn.wsdl";

    private $classmap = array(
        'GetToken\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetToken',
        'GetTokenResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetTokenResponse',
        'GetToken2\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetToken2',
        'GetToken2Response\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetToken2Response',
    );

    public function __construct(
        $wsdl = null,
        $options = array()
    ) {
        foreach ($this->classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        if (isset($options['headers'])) {
            $this->__setSoapHeaders($options['headers']);
        }
        parent::__construct($wsdl ? $wsdl : self::WSDL_FILE, $options);
    }

    /**
     * GetToken
     * Get token for user. Valid for 30 seconds
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetToken $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetTokenResponse
     */
    public function getToken(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetToken $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetToken2 $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetToken2Response
     */
    public function getToken2(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetToken2 $parameters
    ) {
        return $this->__soapCall(
            'GetToken2',
            array($parameters),
            array('uri'=>'http://api.nmbrs.nl/soap/v2.0/SingleSignOn')
        );
    }
}
