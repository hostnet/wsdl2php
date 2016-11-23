<?php

class GoogleSearchResult
{
	// @codingStandardsIgnoreStart
	/**
	 * @var boolean
	 */
	public $documentFiltering;
	/**
	 * @var string
	 */
	public $searchComments;
	/**
	 * @var int
	 */
	public $estimatedTotalResultsCount;
	/**
	 * @var boolean
	 */
	public $estimateIsExact;
	/**
	 * @var ResultElementArray
	 */
	public $resultElements;
	/**
	 * @var string
	 */
	public $searchQuery;
	/**
	 * @var int
	 */
	public $startIndex;
	/**
	 * @var int
	 */
	public $endIndex;
	/**
	 * @var string
	 */
	public $searchTips;
	/**
	 * @var DirectoryCategoryArray
	 */
	public $directoryCategories;
	/**
	 * @var double
	 */
	public $searchTime;
	// @codingStandardsIgnoreEnd

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setDocumentFiltering($val)
	{
        $this->documentFiltering = (int)$val;
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
        $this->searchComments = (int)$val;
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
        $this->estimatedTotalResultsCount = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setEstimateIsExact($val)
	{
        $this->estimateIsExact = (int)$val;
	}

	/**
	 * @param ResultElementArray $val
	 * @throws Exception
	 */
	public function setResultElements($val)
	{
        $this->resultElements = (int)$val;
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
        $this->searchQuery = (int)$val;
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
        $this->startIndex = (int)$val;
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
        $this->endIndex = (int)$val;
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
        $this->searchTips = (int)$val;
	}

	/**
	 * @param DirectoryCategoryArray $val
	 * @throws Exception
	 */
	public function setDirectoryCategories($val)
	{
        $this->directoryCategories = (int)$val;
	}

	/**
	 * @param double $val
	 * @throws Exception
	 */
	public function setSearchTime($val)
	{
        $this->searchTime = (int)$val;
	}
}

class DirectoryCategory
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $fullViewableName;
	/**
	 * @var string
	 */
	public $specialEncoding;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setFullViewableName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for fullViewableName');
        }
        $this->fullViewableName = (int)$val;
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
        $this->specialEncoding = (int)$val;
	}
}

/**
 * GoogleSearchServiceClient
 */
class GoogleSearchServiceClient extends SoapClient {

	const WSDL_FILE = "GoogleSearchTest.wsdl";
	private $classmap = array(
        'GoogleSearchResult' =>
            'GoogleSearchResult',
        'DirectoryCategory' =>
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
