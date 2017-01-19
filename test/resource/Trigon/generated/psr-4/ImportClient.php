<?php

namespace Controle\Hostnet\Namesp;

/**
 * importClient
 */
class importClient extends \SoapClient
{
    const WSDL_FILE = "Trigon.wsdl";

    private $classmap = array(
        'InsertRespondentResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\InsertRespondentResponse',
        'CreateRespondentResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CreateRespondentResponse',
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
     * getModelImportKenmerken
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\getModelImportKenmerken $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\getModelImportKenmerkenResponse
     */
    public function getModelImportKenmerken(
        \Controle\Hostnet\Namesp\Sub4\Complex\getModelImportKenmerken $parameters
    ) {
        return $this->__soapCall(
            'getModelImportKenmerken',
            array($parameters),
            array('uri'=>'http://trigon.nl/')
        );
    }

    /**
     * InsertRespondent
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\InsertRespondent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\InsertRespondentResponse
     */
    public function insertRespondent(
        \Controle\Hostnet\Namesp\Sub4\Complex\InsertRespondent $parameters
    ) {
        return $this->__soapCall(
            'InsertRespondent',
            array($parameters),
            array('uri'=>'http://trigon.nl/')
        );
    }

    /**
     * CreateRespondent
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\CreateRespondent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\CreateRespondentResponse
     */
    public function createRespondent(
        \Controle\Hostnet\Namesp\Sub4\Complex\CreateRespondent $parameters
    ) {
        return $this->__soapCall(
            'CreateRespondent',
            array($parameters),
            array('uri'=>'http://trigon.nl/')
        );
    }
}
