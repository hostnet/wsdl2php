<?php

namespace Controle;

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
	 * @var \Controle\ResultElementArray
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
	 * @var \Controle\DirectoryCategoryArray
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
