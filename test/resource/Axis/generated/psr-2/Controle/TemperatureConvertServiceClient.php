<?php

namespace Controle;

/**
 * TemperatureConvertServiceClient
 */
class TemperatureConvertServiceClient extends \SoapClient {

    const WSDL_FILE = "TemperatureConvertTest.wsdl";

    public function __construct($wsdl = null, $options = array()) {
        (isset($options['headers'])) {
            $this->__setSoapHeaders($options['headers']);
        }
        parent::__construct($wsdl ? $wsdl : self::WSDL_FILE, $options);
    }

    /**
     * CelsiusTOFahrenheit
     *
     * @param $temp
     * @return float
     */
    public function CelsiusTOFahrenheit($temp) {
        return $this->__soapCall(
            'CelsiusTOFahrenheit',
            array($temp),
            array('uri'=>'http://java.hpcc.nectec.or.th:1978/axis/TemperatureConvert.jws')
        );
    }

    /**
     * CelsiusTOKelvin
     *
     * @param $temp
     * @return float
     */
    public function CelsiusTOKelvin($temp) {
        return $this->__soapCall(
            'CelsiusTOKelvin',
            array($temp),
            array('uri'=>'http://java.hpcc.nectec.or.th:1978/axis/TemperatureConvert.jws')
        );
    }

    /**
     * CelsiusTOReaumur
     *
     * @param $temp
     * @return float
     */
    public function CelsiusTOReaumur($temp) {
        return $this->__soapCall(
            'CelsiusTOReaumur',
            array($temp),
            array('uri'=>'http://java.hpcc.nectec.or.th:1978/axis/TemperatureConvert.jws')
        );
    }

    /**
     * CelsiusTORankine
     *
     * @param $temp
     * @return float
     */
    public function CelsiusTORankine($temp) {
        return $this->__soapCall(
            'CelsiusTORankine',
            array($temp),
            array('uri'=>'http://java.hpcc.nectec.or.th:1978/axis/TemperatureConvert.jws')
        );
    }

    /**
     * FahrenheitTOCelsius
     *
     * @param $temp
     * @return float
     */
    public function FahrenheitTOCelsius($temp) {
        return $this->__soapCall(
            'FahrenheitTOCelsius',
            array($temp),
            array('uri'=>'http://java.hpcc.nectec.or.th:1978/axis/TemperatureConvert.jws')
        );
    }

    /**
     * FahrenheitTOKelvin
     *
     * @param $temp
     * @return float
     */
    public function FahrenheitTOKelvin($temp) {
        return $this->__soapCall(
            'FahrenheitTOKelvin',
            array($temp),
            array('uri'=>'http://java.hpcc.nectec.or.th:1978/axis/TemperatureConvert.jws')
        );
    }

    /**
     * FahrenheitTOReaumur
     *
     * @param $temp
     * @return float
     */
    public function FahrenheitTOReaumur($temp) {
        return $this->__soapCall(
            'FahrenheitTOReaumur',
            array($temp),
            array('uri'=>'http://java.hpcc.nectec.or.th:1978/axis/TemperatureConvert.jws')
        );
    }

    /**
     * FahrenheitTORankine
     *
     * @param $temp
     * @return float
     */
    public function FahrenheitTORankine($temp) {
        return $this->__soapCall(
            'FahrenheitTORankine',
            array($temp),
            array('uri'=>'http://java.hpcc.nectec.or.th:1978/axis/TemperatureConvert.jws')
        );
    }

    /**
     * KelvinTOCelsius
     *
     * @param $temp
     * @return float
     */
    public function KelvinTOCelsius($temp) {
        return $this->__soapCall(
            'KelvinTOCelsius',
            array($temp),
            array('uri'=>'http://java.hpcc.nectec.or.th:1978/axis/TemperatureConvert.jws')
        );
    }

    /**
     * KelvinTOFahrenheit
     *
     * @param $temp
     * @return float
     */
    public function KelvinTOFahrenheit($temp) {
        return $this->__soapCall(
            'KelvinTOFahrenheit',
            array($temp),
            array('uri'=>'http://java.hpcc.nectec.or.th:1978/axis/TemperatureConvert.jws')
        );
    }

    /**
     * KelvinTOReaumur
     *
     * @param $temp
     * @return float
     */
    public function KelvinTOReaumur($temp) {
        return $this->__soapCall(
            'KelvinTOReaumur',
            array($temp),
            array('uri'=>'http://java.hpcc.nectec.or.th:1978/axis/TemperatureConvert.jws')
        );
    }

    /**
     * KelvinTORankine
     *
     * @param $temp
     * @return float
     */
    public function KelvinTORankine($temp) {
        return $this->__soapCall(
            'KelvinTORankine',
            array($temp),
            array('uri'=>'http://java.hpcc.nectec.or.th:1978/axis/TemperatureConvert.jws')
        );
    }

    /**
     * ReaumurTOCelsius
     *
     * @param $temp
     * @return float
     */
    public function ReaumurTOCelsius($temp) {
        return $this->__soapCall(
            'ReaumurTOCelsius',
            array($temp),
            array('uri'=>'http://java.hpcc.nectec.or.th:1978/axis/TemperatureConvert.jws')
        );
    }

    /**
     * ReaumurTOFahrenheit
     *
     * @param $temp
     * @return float
     */
    public function ReaumurTOFahrenheit($temp) {
        return $this->__soapCall(
            'ReaumurTOFahrenheit',
            array($temp),
            array('uri'=>'http://java.hpcc.nectec.or.th:1978/axis/TemperatureConvert.jws')
        );
    }

    /**
     * ReaumurTOKelvin
     *
     * @param $temp
     * @return float
     */
    public function ReaumurTOKelvin($temp) {
        return $this->__soapCall(
            'ReaumurTOKelvin',
            array($temp),
            array('uri'=>'http://java.hpcc.nectec.or.th:1978/axis/TemperatureConvert.jws')
        );
    }

    /**
     * ReaumurTORankine
     *
     * @param $temp
     * @return float
     */
    public function ReaumurTORankine($temp) {
        return $this->__soapCall(
            'ReaumurTORankine',
            array($temp),
            array('uri'=>'http://java.hpcc.nectec.or.th:1978/axis/TemperatureConvert.jws')
        );
    }

    /**
     * RankineTOCelsius
     *
     * @param $temp
     * @return float
     */
    public function RankineTOCelsius($temp) {
        return $this->__soapCall(
            'RankineTOCelsius',
            array($temp),
            array('uri'=>'http://java.hpcc.nectec.or.th:1978/axis/TemperatureConvert.jws')
        );
    }

    /**
     * RankineTOFahrenheit
     *
     * @param $temp
     * @return float
     */
    public function RankineTOFahrenheit($temp) {
        return $this->__soapCall(
            'RankineTOFahrenheit',
            array($temp),
            array('uri'=>'http://java.hpcc.nectec.or.th:1978/axis/TemperatureConvert.jws')
        );
    }

    /**
     * RankineTOKelvin
     *
     * @param $temp
     * @return float
     */
    public function RankineTOKelvin($temp) {
        return $this->__soapCall(
            'RankineTOKelvin',
            array($temp),
            array('uri'=>'http://java.hpcc.nectec.or.th:1978/axis/TemperatureConvert.jws')
        );
    }

    /**
     * RankineTOReaumur
     *
     * @param $temp
     * @return float
     */
    public function RankineTOReaumur($temp) {
        return $this->__soapCall(
            'RankineTOReaumur',
            array($temp),
            array('uri'=>'http://java.hpcc.nectec.or.th:1978/axis/TemperatureConvert.jws')
        );
    }
}
