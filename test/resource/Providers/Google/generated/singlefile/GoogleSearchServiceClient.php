<?php

class GoogleSearchResult
{
	/**
	 * @var boolean
	 */
	public $documentfiltering;
	/**
	 * @var string
	 */
	public $searchcomments;
	/**
	 * @var int
	 */
	public $estimatedtotalresultscount;
	/**
	 * @var boolean
	 */
	public $estimateisexact;
	/**
	 * @var ResultElementArray
	 */
	public $resultelements;
	/**
	 * @var string
	 */
	public $searchquery;
	/**
	 * @var int
	 */
	public $startindex;
	/**
	 * @var int
	 */
	public $endindex;
	/**
	 * @var string
	 */
	public $searchtips;
	/**
	 * @var DirectoryCategoryArray
	 */
	public $directorycategories;
	/**
	 * @var double
	 */
	public $searchtime;
	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setDocumentFiltering($val)
	{
        $this->documentfiltering = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSearchComments($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for searchComments');
        }
        $this->searchcomments = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setEstimatedTotalResultsCount($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->estimatedtotalresultscount = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setEstimateIsExact($val)
	{
        $this->estimateisexact = (int)$val;
	}

	/**
	 * @param ResultElementArray $val
	 * @throws Exception
	 */
	public function setResultElements($val)
	{
        $this->resultelements = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSearchQuery($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for searchQuery');
        }
        $this->searchquery = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setStartIndex($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->startindex = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setEndIndex($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->endindex = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSearchTips($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for searchTips');
        }
        $this->searchtips = (int)$val;
	}

	/**
	 * @param DirectoryCategoryArray $val
	 * @throws Exception
	 */
	public function setDirectoryCategories($val)
	{
        $this->directorycategories = (int)$val;
	}

	/**
	 * @param double $val
	 * @throws Exception
	 */
	public function setSearchTime($val)
	{
        $this->searchtime = (int)$val;
	}
}

class DirectoryCategory
{
	/**
	 * @var string
	 */
	public $fullviewablename;
	/**
	 * @var string
	 */
	public $specialencoding;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setFullViewableName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for fullViewableName');
        }
        $this->fullviewablename = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSpecialEncoding($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for specialEncoding');
        }
        $this->specialencoding = (int)$val;
	}
}

/**
 * GoogleSearchServiceClient
 */
class GoogleSearchServiceClient extends SoapClient {

	const WSDL_FILE = "GoogleSearchTest.wsdl";
	private $classmap = array(
        'GoogleSearchResult\,' =>
            'GoogleSearchResult',
        'DirectoryCategory\,' =>
            'DirectoryCategory',
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
	 * doGetCachedPage
	 *
	 * @param $key
	 * @param $url
	 * @return base64Binary
	 */
	public function doGetCachedPage($key, $url) {
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
	public function doSpellingSuggestion($key, $phrase) {
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
	 * @return GoogleSearchResult
	 */
	public function doGoogleSearch($key, $q, $start, $maxResults, $filter, $restrict, $safeSearch, $lr, $ie, $oe) {
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
