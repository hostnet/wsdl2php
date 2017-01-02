<?php

namespace Controle\Hostnet\Namesp;

/**
 * GoogleSearchServiceClient
 */
class GoogleSearchServiceClient extends \SoapClient
{
    const WSDL_FILE = "GoogleSearchTest.wsdl";

    private $classmap = array(
        'GoogleSearchResult' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GoogleSearchResult',
        'DirectoryCategory' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DirectoryCategory',
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
     * doGetCachedPage
     *
     * @param $key
     * @param $url
     * @return base64Binary
     */
    public function doGetCachedPage(
        $key, $url
    ) {
        return $this->__soapCall(
            'doGetCachedPage',
            array(
            $key,
            $url
                ),
            array('uri'=>'urn:GoogleSearch')
        );
    }

    /**
     * doSpellingSuggestion
     *
     * @param $key
     * @param $phrase
     * @return string
     */
    public function doSpellingSuggestion(
        $key, $phrase
    ) {
        return $this->__soapCall(
            'doSpellingSuggestion',
            array(
            $key,
            $phrase
                ),
            array('uri'=>'urn:GoogleSearch')
        );
    }

    /**
     * doGoogleSearch
     *
     * @param $key
     * @param $q
     * @param $start
     * @param $maxResults
     * @param $filter
     * @param $restrict
     * @param $safeSearch
     * @param $lr
     * @param $ie
     * @param $oe
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GoogleSearchResult
     */
    public function doGoogleSearch(
        $key, $q, $start, $maxResults, $filter, $restrict, $safeSearch, $lr, $ie, $oe
    ) {
        return $this->__soapCall(
            'doGoogleSearch',
            array(
            $key,
            $q,
            $start,
            $maxResults,
            $filter,
            $restrict,
            $safeSearch,
            $lr,
            $ie,
            $oe
                ),
            array('uri'=>'urn:GoogleSearch')
        );
    }
}
