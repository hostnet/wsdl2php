<?php

namespace Controle\sub1\sub2;
/**
 * PriceRangeFilterType
 * One of the data filters used when searching for items using        GetSearchResults. Allows
 * filtering based on the current price of items.        Properties allow for defining a range
 * within prices must fall to be        returned in the result set, a minimum price for items
 * returned, or a        maximum price for items returned.
 */
class PriceRangeFilterType {
	/**
	 * @var \Controle\sub1\sub2\AmountType | Specifies the upper limit of price range for the automatic search criteria.
	 */
	public $MaxPrice;
	/**
	 * @var \Controle\sub1\sub2\AmountType | Specifies the lower limit of price range for the automatic search criteria.
	 */
	public $MinPrice;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

