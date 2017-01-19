<?php

namespace Controle\sub1\sub2;

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
	 * @var \Controle\sub1\sub2\ResultElementArray
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
	 * @var \Controle\sub1\sub2\DirectoryCategoryArray
	 */
	public $directoryCategories;
	/**
	 * @var double
	 */
	public $searchTime;
	// @codingStandardsIgnoreEnd

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setDocumentFiltering($val)
	{
        $this->documentFiltering = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setSearchComments($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for searchComments');
        }
        $this->searchComments = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setEstimatedTotalResultsCount($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->estimatedTotalResultsCount = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setEstimateIsExact($val)
	{
        $this->estimateIsExact = $val;
	}

	/**
	 * @param ResultElementArray $val
	 * @throws \Exception
	 */
	public function setResultElements($val)
	{
        $this->resultElements = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setSearchQuery($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for searchQuery');
        }
        $this->searchQuery = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setStartIndex($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->startIndex = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setEndIndex($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->endIndex = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setSearchTips($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for searchTips');
        }
        $this->searchTips = $val;
	}

	/**
	 * @param DirectoryCategoryArray $val
	 * @throws \Exception
	 */
	public function setDirectoryCategories($val)
	{
        $this->directoryCategories = $val;
	}

	/**
	 * @param double $val
	 * @throws \Exception
	 */
	public function setSearchTime($val)
	{
        $this->searchTime = $val;
	}
}
