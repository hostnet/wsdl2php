<?php

namespace Controle\Hostnet\Namesp;

/**
 * HouseofDevClient
 * http://ws.houseofdev.com/cfcs/ws.cfc?wsdl
 */
class HouseofDevClient extends \SoapClient
{
    const WSDL_FILE = "ComicsWebServiceTest.wsdl";

    private $classmap = array(
        'CFCInvocationException' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CfCinvocationException',
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
        parent::__construct($wsdl ? $wsdl : __DIR__ . '/' . self::WSDL_FILE, $options);
    }

    /**
     * getComics
     *
     * @param 
     * @return string
     */
    public function getComics(
        
    ) {
        return $this->__soapCall(
            'getComics',
            array(),
            array('uri'=>'http://cfcs')
        );
    }
}
