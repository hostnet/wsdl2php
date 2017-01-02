<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * InteropClient
 */
class InteropClient extends \SoapClient
{
    const WSDL_FILE = "InteropTyped.wsdl";


    public function __construct(
        $wsdl = null,
        $options = array()
    ) {
        (isset($options['headers'])) {
            $this->__setSoapHeaders($options['headers']);
        }
        parent::__construct($wsdl ? $wsdl : __DIR__ . '/' . self::WSDL_FILE, $options);
    }

    /**
     * echoBase64
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\anyType $inputBase64
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\anyType
     */
    public function echoBase64(
        \Controle\Hostnet\Namesp\Sub4\Complex\anyType $inputBase64
    ) {
        return $this->__soapCall(
            'echoBase64',
            array($inputBase64),
            array('uri'=>'http://tempuri.org/wsdl/')
        );
    }

    /**
     * echoDate
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\anyType $inputDate
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\anyType
     */
    public function echoDate(
        \Controle\Hostnet\Namesp\Sub4\Complex\anyType $inputDate
    ) {
        return $this->__soapCall(
            'echoDate',
            array($inputDate),
            array('uri'=>'http://tempuri.org/wsdl/')
        );
    }

    /**
     * echoVoid
     *
     * @param 
     * @return void
     */
    public function echoVoid(
        
    ) {
        return $this->__soapCall(
            'echoVoid',
            array(),
            array('uri'=>'http://tempuri.org/wsdl/')
        );
    }

    /**
     * NoSuchMethod
     *
     * @param 
     * @return void
     */
    public function noSuchMethod(
        
    ) {
        return $this->__soapCall(
            'NoSuchMethod',
            array(),
            array('uri'=>'http://tempuri.org/wsdl/')
        );
    }

    /**
     * echoStructArray
     *
     * @param $inputStructArray
     * @return ArrayOfSOAPStruct
     */
    public function echoStructArray(
        $inputStructArray
    ) {
        return $this->__soapCall(
            'echoStructArray',
            array($inputStructArray),
            array('uri'=>'http://tempuri.org/wsdl/')
        );
    }

    /**
     * echoStruct
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SOAPStruct $inputStruct
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SOAPStruct
     */
    public function echoStruct(
        \Controle\Hostnet\Namesp\Sub4\Complex\SOAPStruct $inputStruct
    ) {
        return $this->__soapCall(
            'echoStruct',
            array($inputStruct),
            array('uri'=>'http://tempuri.org/wsdl/')
        );
    }

    /**
     * echoFloatArray
     *
     * @param $inputFloatArray
     * @return ArrayOffloat
     */
    public function echoFloatArray(
        $inputFloatArray
    ) {
        return $this->__soapCall(
            'echoFloatArray',
            array($inputFloatArray),
            array('uri'=>'http://tempuri.org/wsdl/')
        );
    }

    /**
     * echoFloat
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\anyType $inputFloat
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\anyType
     */
    public function echoFloat(
        \Controle\Hostnet\Namesp\Sub4\Complex\anyType $inputFloat
    ) {
        return $this->__soapCall(
            'echoFloat',
            array($inputFloat),
            array('uri'=>'http://tempuri.org/wsdl/')
        );
    }

    /**
     * echoIntegerArray
     *
     * @param $inputIntegerArray
     * @return ArrayOfint
     */
    public function echoIntegerArray(
        $inputIntegerArray
    ) {
        return $this->__soapCall(
            'echoIntegerArray',
            array($inputIntegerArray),
            array('uri'=>'http://tempuri.org/wsdl/')
        );
    }

    /**
     * echoInteger
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\anyType $inputInteger
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\anyType
     */
    public function echoInteger(
        \Controle\Hostnet\Namesp\Sub4\Complex\anyType $inputInteger
    ) {
        return $this->__soapCall(
            'echoInteger',
            array($inputInteger),
            array('uri'=>'http://tempuri.org/wsdl/')
        );
    }

    /**
     * echoStringArray
     *
     * @param $inputStringArray
     * @return ArrayOfstring
     */
    public function echoStringArray(
        $inputStringArray
    ) {
        return $this->__soapCall(
            'echoStringArray',
            array($inputStringArray),
            array('uri'=>'http://tempuri.org/wsdl/')
        );
    }

    /**
     * echoString
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\anyType $inputString
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\anyType
     */
    public function echoString(
        \Controle\Hostnet\Namesp\Sub4\Complex\anyType $inputString
    ) {
        return $this->__soapCall(
            'echoString',
            array($inputString),
            array('uri'=>'http://tempuri.org/wsdl/')
        );
    }

    /**
     * echoDecimal
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\anyType $inputDecimal
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\anyType
     */
    public function echoDecimal(
        \Controle\Hostnet\Namesp\Sub4\Complex\anyType $inputDecimal
    ) {
        return $this->__soapCall(
            'echoDecimal',
            array($inputDecimal),
            array('uri'=>'http://tempuri.org/wsdl/')
        );
    }

    /**
     * echoBoolean
     *
     * @param $inputBoolean
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\anyType
     */
    public function echoBoolean(
        $inputBoolean
    ) {
        return $this->__soapCall(
            'echoBoolean',
            array($inputBoolean),
            array('uri'=>'http://tempuri.org/wsdl/')
        );
    }
}
