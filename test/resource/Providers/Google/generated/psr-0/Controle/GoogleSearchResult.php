<?php

namespace Controle;
class GoogleSearchResult {
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
}

