<?php

namespace Controle;
/**
 * PriceRangeFilterType
 * One of the data filters used when searching for items using        GetSearchResults. Allows
 * filtering based on the current price of items.        Properties allow for defining a range
 * within prices must fall to be        returned in the result set, a minimum price for items
 * returned, or a        maximum price for items returned.
 */
class PriceRangeFilterType {
    /**
     * @var \Controle\AmountType | Specifies the upper limit of price range for the automatic search criteria.
     */
    public $MaxPrice;
    /**
     * @var \Controle\AmountType | Specifies the lower limit of price range for the automatic search criteria.
     */
    public $MinPrice;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}

