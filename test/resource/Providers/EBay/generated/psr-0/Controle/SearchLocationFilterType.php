<?php

namespace Controle;
/**
 * SearchLocationFilterType
 * One of the data filters used when searching for items using        GetSearchResults. Allows
 * filtering based on an item's location (where        the seller would be shipping the item
 * from) or an item's availability        (which eBay sites the item can be purchased from).
 */
class SearchLocationFilterType {
	/**
	 * @var \Controle\CountryCodeType | Country the item is either located in or available to (depending on the value
	 *   specified in ItemLocation).
	 */
	public $CountryCode;
	/**
	 * @var \Controle\ItemLocationCodeType | Specifies whether the filter should be for items located in the country            specified
	 * in Country or available to that country.
	 */
	public $ItemLocation;
	/**
	 * @var \Controle\SearchLocationType | Specifies filtering based on site ID.
	 */
	public $SearchLocation;
	/**
	 * @var \Controle\CurrencyCodeType | Limits the result set to just those items with a specified currency.
	 */
	public $Currency;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
}

