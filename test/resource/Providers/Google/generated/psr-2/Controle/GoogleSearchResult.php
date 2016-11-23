<?php

namespace Controle;

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
     * @var \Controle\ResultElementArray
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
     * @var \Controle\DirectoryCategoryArray
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
