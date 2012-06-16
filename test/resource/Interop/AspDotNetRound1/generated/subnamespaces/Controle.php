<?php


namespace Controle;

/**
 * SimpleTestClient
 * These operations implement some simple Section 5, rpc-style SOAP operations, for interop
 * testing. Please email johnko@microsoft.com with any  questions.
 */
class SimpleTestClient extends \SoapClient {

	const WSDL_FILE = "AspDotNetRound1Test.wsdl";
	private $classmap = array(
		'SOAPStruct' => '\Controle\sub1\sub2\SOAPStruct',
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
     * @var int
     */
    public $varInt;
    /**
     * @var string
     */
    public $varString;
    /**
     * @var float
     */
    public $varFloat;

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setVarInt($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->varInt = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setVarString($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for varString');
		$this->varString = (int)$val;
	}

	/**
	 * @param float $val
	 * @throws Exception
	 */
	public function setVarFloat($val) {
		
		$this->varFloat = (int)$val;
	}
}


