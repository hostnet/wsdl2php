<?php

namespace Controle;

/**
 * ImportClient
 */
class ImportClient extends \SoapClient {

	const WSDL_FILE = "Trigon.wsdl";
	private $classmap = array(
        'InsertRespondentResponse' =>
            '\Controle\sub1\sub2\InsertRespondentResponse',
        'CreateRespondentResponse' =>
            '\Controle\sub1\sub2\CreateRespondentResponse',
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
	 * @param \Controle\sub1\sub2\getModelImportKenmerken $parameters
	 * @return \Controle\sub1\sub2\getModelImportKenmerkenResponse
	 */
	public function getModelImportKenmerken(\Controle\sub1\sub2\getModelImportKenmerken $parameters) {
        return $this->__soapCall(
            'getModelImportKenmerken',
            array($parameters),
            array('uri'=>'http://trigon.nl/')
        );
	}

	/**
	 * InsertRespondent
	 *
	 * @param \Controle\sub1\sub2\InsertRespondent $parameters
	 * @return \Controle\sub1\sub2\InsertRespondentResponse
	 */
	public function InsertRespondent(\Controle\sub1\sub2\InsertRespondent $parameters) {
        return $this->__soapCall(
            'InsertRespondent',
            array($parameters),
            array('uri'=>'http://trigon.nl/')
        );
	}

	/**
	 * CreateRespondent
	 *
	 * @param \Controle\sub1\sub2\CreateRespondent $parameters
	 * @return \Controle\sub1\sub2\CreateRespondentResponse
	 */
	public function CreateRespondent(\Controle\sub1\sub2\CreateRespondent $parameters) {
        return $this->__soapCall(
            'CreateRespondent',
            array($parameters),
            array('uri'=>'http://trigon.nl/')
        );
	}
}
