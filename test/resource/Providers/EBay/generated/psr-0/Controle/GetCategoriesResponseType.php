<?php

namespace Controle;

/**
 * GetCategoriesResponseType
 * Contains the category data for the eBay site specified as input. The category data is contained
 * in a CategoryArrayType object, within which are zero, one, or multiple CategoryType objects.
 * Each CategoryType object contains the detail data for one category. Other fields tell how
 * many categories are returned in a call, when the category hierarchy was last updated, and
 * the version of the category hierarchy (all three of which can differ from one eBay site
 * to the next).
 */
class GetCategoriesResponseType extends
 \Controle\AbstractResponseType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\CategoryArrayType | Statistical information about categories that contain items that match the query, if any.
	 * Returns empty if no matches are found or when the Categories filter was not passed in the
	 * request. (For categories associated with specific items, see items returned in each search result.)
	 * Shows the distribution of items across each category.
	 */
	public $CategoryArray;
	/**
	 * @var int | Indicates the number of categories in the array.
	 */
	public $CategoryCount;
	/**
	 * @var dateTime | Gives the time in GMT that the feature flags for the category hierarchy were last updated.
	 */
	public $UpdateTime;
	/**
	 * @var string | Version value assigned to the current category mapping data for the site.
	 *     Compare this value to the version value the application stored with the mappings
	 *                the last time the application executed the call. If the versions are the
	 * same,                  the data has not changed since the last time the data was retrieved
	 * and stored.
	 */
	public $CategoryVersion;
	/**
	 * @var boolean | This field was marked as deprecated (no longer recommended) with release 435 (November
	 * 2005). With client request version 485 and higher (November 2006), this field is no longer
	 * returned. Please note that the names of ReservePriceInclusive and ReduceReserveInclusive
	 * are REVERSED relative to their logic.
	 */
	public $ReservePriceInclusive;
	/**
	 * @var boolean | If true, ReservePriceAllowed indicates that all categories on the site allow the seller
	 * to specify a reserve price for an item. If false, all categories on the site do not normally
	 * allow sellers to specify reserve prices. The Category.ORPA (override reserve price allowed)
	 * field can override (or toggle) the reserve price allowed setting for a given category. For
	 * example, if ReservePriceAllowed is false and Category.ORPA is true, the category overrides
	 * the site setting and supports reserve prices. If ReservePriceAllowed is true and Category.ORPA
	 * is true, the category overrides the site setting and does does not support reserve prices.
	 */
	public $ReservePriceAllowed;
	/**
	 * @var double | Specifies the default site setting for whether the Minimum Reserve Price feature is supported
	 * for this category.
	 */
	public $MinimumReservePrice;
	/**
	 * @var \Controle\CurrencyCodeType | Limits the result set to just those items with a specified currency.
	 */
	public $Currency;
	/**
	 * @var boolean | This field was marked as deprecated (no longer recommended) with release 435 (November
	 * 2005). With client request version 485 and higher (November 2006), this field is no longer
	 * returned. Please note that the names of ReservePriceInclusive and ReduceReserveInclusive
	 * are REVERSED relative to their logic.
	 */
	public $ReduceReserveInclusive;
	/**
	 * @var boolean | If true, ReduceReserveAllowed indicates that all categories on the site allow the seller
	 * to reduce an item's reserve price. If false, all categories on the site do not normally
	 * allow sellers to reduce an item's reserve price. The Category.ORRA (override reduce reserve
	 * price) field can override (or toggle) the reserve price reduction setting for a given category. For
	 * example, if ReduceReserveAllowed is false and Category.ORRA is true, the category overrides
	 * the site setting and supports reducing reserve prices. If ReduceReserveAllowed is true
	 * and Category.ORRA is true, the category overrides the site setting and does does not support
	 * reducing reserve prices.
	 */
	public $ReduceReserveAllowed;
	// @codingStandardsIgnoreEnd

	/**
	 * @param CategoryArrayType $val
	 * @throws Exception
	 */
	public function setCategoryArray($val)
	{
        $this->CategoryArray = (CategoryArrayType)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCategoryCount($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CategoryCount = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setUpdateTime($val)
	{
        $this->UpdateTime = (dateTime)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCategoryVersion($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CategoryVersion');
        }
        $this->CategoryVersion = (string)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setReservePriceInclusive($val)
	{
        $this->ReservePriceInclusive = (boolean)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setReservePriceAllowed($val)
	{
        $this->ReservePriceAllowed = (boolean)$val;
	}

	/**
	 * @param double $val
	 * @throws Exception
	 */
	public function setMinimumReservePrice($val)
	{
        $this->MinimumReservePrice = (double)$val;
	}

	/**
	 * @param CurrencyCodeType $val
	 * @throws Exception
	 */
	public function setCurrency($val)
	{
        $this->Currency = (CurrencyCodeType)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setReduceReserveInclusive($val)
	{
        $this->ReduceReserveInclusive = (boolean)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setReduceReserveAllowed($val)
	{
        $this->ReduceReserveAllowed = (boolean)$val;
	}
}
