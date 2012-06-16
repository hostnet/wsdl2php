<?php

namespace Controle\sub1\sub2;
/**
 * GetMyeBaySellingResponseType
 * Returns summary and detail information about items the user is selling, items scheduled
 * to sell, currently listed, sold, and closed but not sold.
 */
class GetMyeBaySellingResponseType extends \Controle\sub1\sub2\AbstractResponseType {
	/**
	 * @var \Controle\sub1\sub2\SellingSummaryType | Contains summary information about the items the user is selling.
	 */
	public $SellingSummary;
	/**
	 * @var \Controle\sub1\sub2\PaginatedItemArrayType | Contains the items the user has scheduled for sale, but whose listings have not yet started.
	 */
	public $ScheduledList;
	/**
	 * @var \Controle\sub1\sub2\PaginatedItemArrayType | Contains the items the user is selling that have active listings.
	 */
	public $ActiveList;
	/**
	 * @var \Controle\sub1\sub2\PaginatedOrderTransactionArrayType | Contains the items the user has sold.
	 */
	public $SoldList;
	/**
	 * @var \Controle\sub1\sub2\PaginatedItemArrayType | Contains the items whose listings have ended but that have not sold.
	 */
	public $UnsoldList;
	/**
	 * @param SellingSummaryType $val
	 * @throws Exception
	 */
	public function setSellingSummary($val) {
		
		$this->SellingSummary = (int)$val;
	}

	/**
	 * @param PaginatedItemArrayType $val
	 * @throws Exception
	 */
	public function setScheduledList($val) {
		
		$this->ScheduledList = (int)$val;
	}

	/**
	 * @param PaginatedItemArrayType $val
	 * @throws Exception
	 */
	public function setActiveList($val) {
		
		$this->ActiveList = (int)$val;
	}

	/**
	 * @param PaginatedOrderTransactionArrayType $val
	 * @throws Exception
	 */
	public function setSoldList($val) {
		
		$this->SoldList = (int)$val;
	}

	/**
	 * @param PaginatedItemArrayType $val
	 * @throws Exception
	 */
	public function setUnsoldList($val) {
		
		$this->UnsoldList = (int)$val;
	}

}

