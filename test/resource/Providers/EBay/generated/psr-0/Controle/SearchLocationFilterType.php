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
	/**
	 * @param CountryCodeType $val
	 * @throws Exception
	 */
	public function setCountryCode($val) {
		
		$this->CountryCode = (int)$val;
	}

	/**
	 * @param ItemLocationCodeType $val
	 * @throws Exception
	 */
	public function setItemLocation($val) {
		
		$this->ItemLocation = (int)$val;
	}

	/**
	 * @param SearchLocationType $val
	 * @throws Exception
	 */
	public function setSearchLocation($val) {
		
		$this->SearchLocation = (int)$val;
	}

	/**
	 * @param CurrencyCodeType $val
	 * @throws Exception
	 */
	public function setCurrency($val) {
		
		$this->Currency = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val) {
		
		$this->any = (int)$val;
	}

}

