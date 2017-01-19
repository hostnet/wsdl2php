<?php

namespace Controle;

/**
 * importClient
 */
class importClient extends \SoapClient {

    const WSDL_FILE = "Trigon.wsdl";
    private $classmap = array(
        'InsertRespondentResponse' =>
            '\Controle\InsertRespondentResponse',
        'CreateRespondentResponse' =>
            '\Controle\CreateRespondentResponse',
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
     * getModelImportKenmerken
     *
     * @param \Controle\getModelImportKenmerken $parameters
     * @return \Controle\getModelImportKenmerkenResponse
     */
    public function getModelImportKenmerken(\Controle\getModelImportKenmerken $parameters) {
        return $this->__soapCall(
            'getModelImportKenmerken',
            array($parameters),
            array('uri'=>'http://trigon.nl/')
        );
    }

    /**
     * InsertRespondent
     *
     * @param \Controle\InsertRespondent $parameters
     * @return \Controle\InsertRespondentResponse
     */
    public function InsertRespondent(\Controle\InsertRespondent $parameters) {
        return $this->__soapCall(
            'InsertRespondent',
            array($parameters),
            array('uri'=>'http://trigon.nl/')
        );
    }

    /**
     * CreateRespondent
     *
     * @param \Controle\CreateRespondent $parameters
     * @return \Controle\CreateRespondentResponse
     */
    public function CreateRespondent(\Controle\CreateRespondent $parameters) {
        return $this->__soapCall(
            'CreateRespondent',
            array($parameters),
            array('uri'=>'http://trigon.nl/')
        );
    }
}
