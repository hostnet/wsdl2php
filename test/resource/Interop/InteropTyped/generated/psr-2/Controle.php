<?php


namespace Controle;

/**
 * InteropClient
 */
class InteropClient extends \SoapClient {

    const WSDL_FILE = "InteropTyped.wsdl";
    private $classmap = array(
        'SOAPStruct' => '\Controle\SOAPStruct',
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
class SOAPStruct {
    /**
     * @var string
     */
    public $varString;
    /**
     * @var int
     */
    public $varInt;
    /**
     * @var float
     */
    public $varFloat;

    /**
     * @param string $val
     * @throws Exception
     */
    public function setVarString($val) {
        if(!is_string($val)) throw new Exception('POJO Proxy need a string for varString');
        $this->varString = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setVarInt($val) {
        if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
        $this->varInt = (int)$val;
    }

    /**
     * @param float $val
     * @throws Exception
     */
    public function setVarFloat($val) {
        
        $this->varFloat = (int)$val;
    }
}


