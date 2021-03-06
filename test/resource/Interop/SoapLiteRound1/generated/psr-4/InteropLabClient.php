<?php

namespace Controle\Hostnet\Namesp;

/**
 * InteropLabClient
 */
class InteropLabClient extends \SoapClient
{
    const WSDL_FILE = "SoapLiteRound1Test.wsdl";


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
     * echoString
     *
     * @param $inputString
     * @return string
     */
    public function echoString(
        $inputString
    ) {
        return $this->__soapCall(
            'echoString',
            array($inputString),
            array('uri'=>'http://soapinterop.org/interop.wsdl')
        );
    }

    /**
     * echoStringArray
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\UNKNOWN $inputStringArray
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\UNKNOWN
     */
    public function echoStringArray(
        \Controle\Hostnet\Namesp\Sub4\Complex\UNKNOWN $inputStringArray
    ) {
        return $this->__soapCall(
            'echoStringArray',
            array($inputStringArray),
            array('uri'=>'http://soapinterop.org/interop.wsdl')
        );
    }

    /**
     * echoInteger
     *
     * @param $inputInteger
     * @return int
     */
    public function echoInteger(
        $inputInteger
    ) {
        return $this->__soapCall(
            'echoInteger',
            array($inputInteger),
            array('uri'=>'http://soapinterop.org/interop.wsdl')
        );
    }

    /**
     * echoIntegerArray
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\UNKNOWN $inputIntegerArray
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\UNKNOWN
     */
    public function echoIntegerArray(
        \Controle\Hostnet\Namesp\Sub4\Complex\UNKNOWN $inputIntegerArray
    ) {
        return $this->__soapCall(
            'echoIntegerArray',
            array($inputIntegerArray),
            array('uri'=>'http://soapinterop.org/interop.wsdl')
        );
    }

    /**
     * echoFloat
     *
     * @param $inputFloat
     * @return float
     */
    public function echoFloat(
        $inputFloat
    ) {
        return $this->__soapCall(
            'echoFloat',
            array($inputFloat),
            array('uri'=>'http://soapinterop.org/interop.wsdl')
        );
    }

    /**
     * echoFloatArray
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\UNKNOWN $inputFloatArray
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\UNKNOWN
     */
    public function echoFloatArray(
        \Controle\Hostnet\Namesp\Sub4\Complex\UNKNOWN $inputFloatArray
    ) {
        return $this->__soapCall(
            'echoFloatArray',
            array($inputFloatArray),
            array('uri'=>'http://soapinterop.org/interop.wsdl')
        );
    }

    /**
     * echoStruct
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\UNKNOWN $inputStruct
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\UNKNOWN
     */
    public function echoStruct(
        \Controle\Hostnet\Namesp\Sub4\Complex\UNKNOWN $inputStruct
    ) {
        return $this->__soapCall(
            'echoStruct',
            array($inputStruct),
            array('uri'=>'http://soapinterop.org/interop.wsdl')
        );
    }

    /**
     * echoStructArray
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\UNKNOWN $inputStructArray
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\UNKNOWN
     */
    public function echoStructArray(
        \Controle\Hostnet\Namesp\Sub4\Complex\UNKNOWN $inputStructArray
    ) {
        return $this->__soapCall(
            'echoStructArray',
            array($inputStructArray),
            array('uri'=>'http://soapinterop.org/interop.wsdl')
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
            array('uri'=>'http://soapinterop.org/interop.wsdl')
        );
    }
}
