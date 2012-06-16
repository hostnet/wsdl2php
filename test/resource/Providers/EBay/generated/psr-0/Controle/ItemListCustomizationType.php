<?php

namespace Controle;
/**
 * ItemListCustomizationType
 * Defines how a list of items should be returned.
 */
class ItemListCustomizationType {
	/**
	 * @var boolean | Whether to include information about this type of reminder in the response. When true,
	 * the container is returned with default input parameters.
	 */
	public $Include;
	/**
	 * @var \Controle\ListingTypeCodeType | The listing format (fixed price, auction, etc) for the automatic item search criteria.
	 */
	public $ListingType;
	/**
	 * @var \Controle\ItemSortTypeCodeType | Specifies the result sort order. Default is Ascending.
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
	 * @var \Controle\PaginationType | Pagination instruction that specifies the virtual page of data to return            per
	 * search request. Default page number is 0 (the first page).            Specify a page number
	 * of 0 or a positive value lower            than the approximate number of pages available.
	 */
	public $Pagination;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
}

