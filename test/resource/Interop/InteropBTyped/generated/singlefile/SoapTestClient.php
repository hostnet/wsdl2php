<?php

class SoApStruct
{
	// @codingStandardsIgnoreStart
	/**
	 * @var anyType
	 */
	public $varString;
	/**
	 * @var anyType
	 */
	public $varInt;
	/**
	 * @var anyType
	 */
	public $varFloat;
	// @codingStandardsIgnoreEnd

	/**
	 * @param anyType $val
	 * @throws Exception
	 */
	public function setVarString($val)
	{
        $this->varString = ()$val;
	}

	/**
	 * @param anyType $val
	 * @throws Exception
	 */
	public function setVarInt($val)
	{
        $this->varInt = ()$val;
	}

	/**
	 * @param anyType $val
	 * @throws Exception
	 */
	public function setVarFloat($val)
	{
        $this->varFloat = ()$val;
	}
}

class SoApStructStruct
{
	// @codingStandardsIgnoreStart
	/**
	 * @var anyType
	 */
	public $varString;
	/**
	 * @var anyType
	 */
	public $varInt;
	/**
	 * @var anyType
	 */
	public $varFloat;
	/**
	 * @var SOAPStruct
	 */
	public $varStruct;
	// @codingStandardsIgnoreEnd

	/**
	 * @param anyType $val
	 * @throws Exception
	 */
	public function setVarString($val)
	{
        $this->varString = ()$val;
	}

	/**
	 * @param anyType $val
	 * @throws Exception
	 */
	public function setVarInt($val)
	{
        $this->varInt = ()$val;
	}

	/**
	 * @param anyType $val
	 * @throws Exception
	 */
	public function setVarFloat($val)
	{
        $this->varFloat = ()$val;
	}

	/**
	 * @param SOAPStruct $val
	 * @throws Exception
	 */
	public function setVarStruct($val)
	{
        $this->varStruct = ()$val;
	}
}

class SoApArrayStruct
{
	// @codingStandardsIgnoreStart
	/**
	 * @var anyType
	 */
	public $varString;
	/**
	 * @var anyType
	 */
	public $varInt;
	/**
	 * @var anyType
	 */
	public $varFloat;
	/**
	 * @var string[]
	 */
	public $varArray;
	// @codingStandardsIgnoreEnd

	/**
	 * @param anyType $val
	 * @throws Exception
	 */
	public function setVarString($val)
	{
        $this->varString = ()$val;
	}

	/**
	 * @param anyType $val
	 * @throws Exception
	 */
	public function setVarInt($val)
	{
        $this->varInt = ()$val;
	}

	/**
	 * @param anyType $val
	 * @throws Exception
	 */
	public function setVarFloat($val)
	{
        $this->varFloat = ()$val;
	}

	/**
	 * @param ArrayOfstring $val
	 * @throws Exception
	 */
	public function setVarArray($val)
	{
        $this->varArray = ()$val;
	}
}

/**
 * SoapTestClient
 */
class SoapTestClient extends SoapClient {

	const WSDL_FILE = "InteropBtyped.wsdl";
	private $classmap = array(
        'SOAPStruct' =>
            'SOAPStruct',
        'SOAPStructStruct' =>
            'SOAPStructStruct',
        'SOAPArrayStruct' =>
            'SOAPArrayStruct',
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
        parent::__construct($wsdl ? $wsdl : self::WSDL_FILE, $options);
	}

	/**
	 * echoStructAsSimpleTypes
	 *
	 * @param SOAPStruct $inputStruct
	 * @return list(anyType $outputString, anyType $outputInteger, anyType $outputFloat)
	 */
	public function echoStructAsSimpleTypes(SOAPStruct $inputStruct) {
        return $this->__soapCall(
            'echoStructAsSimpleTypes',
            array($inputStruct),
            array('uri'=>'http://soapinterop.org/')
        );
	}

	/**
	 * echoSimpleTypesAsStruct
	 *
	 * @param anyType $inputString
	 * @param anyType $inputInteger
	 * @param anyType $inputFloat
	 * @return SOAPStruct
	 */
	public function echoSimpleTypesAsStruct(anyType $inputString, anyType $inputInteger, anyType $inputFloat) {
        return $this->__soapCall(
            'echoSimpleTypesAsStruct',
            array(
            $inputString,
            $inputInteger,
            $inputFloat
	            ),
            array('uri'=>'http://soapinterop.org/')
        );
	}

	/**
	 * echo2DStringArray
	 *
	 * @param $input2DStringArray
	 * @return ArrayOfString2D
	 */
	public function echo2DStringArray($input2DStringArray) {
        return $this->__soapCall(
            'echo2DStringArray',
            array($input2DStringArray),
            array('uri'=>'http://soapinterop.org/')
        );
	}

	/**
	 * echoNestedStruct
	 *
	 * @param SOAPStructStruct $inputStruct
	 * @return SOAPStructStruct
	 */
	public function echoNestedStruct(SOAPStructStruct $inputStruct) {
        return $this->__soapCall(
            'echoNestedStruct',
            array($inputStruct),
            array('uri'=>'http://soapinterop.org/')
        );
	}

	/**
	 * echoNestedArray
	 *
	 * @param SOAPArrayStruct $inputStruct
	 * @return SOAPArrayStruct
	 */
	public function echoNestedArray(SOAPArrayStruct $inputStruct) {
        return $this->__soapCall(
            'echoNestedArray',
            array($inputStruct),
            array('uri'=>'http://soapinterop.org/')
        );
	}
}
