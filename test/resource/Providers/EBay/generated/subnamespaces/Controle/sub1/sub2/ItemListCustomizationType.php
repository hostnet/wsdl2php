<?php

namespace Controle\sub1\sub2;

/**
 * ItemListCustomizationType
 * Defines how a list of items should be returned.
 */
class ItemListCustomizationType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var boolean | Whether to include information about this type of reminder in the response. When true,
	 * the container is returned with default input parameters.
	 */
	public $Include;
	/**
	 * @var \Controle\sub1\sub2\ListingTypeCodeType | The listing format (fixed price, auction, etc) for the automatic item search criteria.
	 */
	public $ListingType;
	/**
	 * @var \Controle\sub1\sub2\ItemSortTypeCodeType | Specifies the result sort order. Default is Ascending.
	 */
	public $Sort;
	/**
	 * @var int | The length of time the reminder has existed in the user's My eBay account, in days. Valid
	 * values are 1-60.
	 */
	public $DurationInDays;
	/**
	 * @var boolean | Specifies whether to include Item.PrivateNotes and Item.eBayNotes in the response. Valid
	 * for WatchList, BidList, WonList, LostList, ScheduledList, ActiveList, SoldList, and UnsoldList.
	 */
	public $IncludeNotes;
	/**
	 * @var \Controle\sub1\sub2\PaginationType | Pagination instruction that specifies the virtual page of data to return            per
	 * search request. Default page number is 0 (the first page).            Specify a page number
	 * of 0 or a positive value lower            than the approximate number of pages available.
	 */
	public $Pagination;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setInclude($val)
	{
        $this->Include = $val;
	}

	/**
	 * @param ListingTypeCodeType $val
	 * @throws Exception
	 */
	public function setListingType($val)
	{
        $this->ListingType = $val;
	}

	/**
	 * @param ItemSortTypeCodeType $val
	 * @throws Exception
	 */
	public function setSort($val)
	{
        $this->Sort = $val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setDurationInDays($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->DurationInDays = $val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setIncludeNotes($val)
	{
        $this->IncludeNotes = $val;
	}

	/**
	 * @param PaginationType $val
	 * @throws Exception
	 */
	public function setPagination($val)
	{
        $this->Pagination = $val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = $val;
	}
}
