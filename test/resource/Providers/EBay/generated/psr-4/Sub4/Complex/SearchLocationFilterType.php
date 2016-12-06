<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * SearchLocationFilterType
 * One of the data filters used when searching for items using        GetSearchResults. Allows
 * filtering based on an item's location (where        the seller would be shipping the item
 * from) or an item's availability        (which eBay sites the item can be purchased from).
 */
class SearchLocationFilterType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CountryCodeType | Country the item is either located in or available to (depending on the value
     *      specified in ItemLocation).
     */
    public $CountryCode;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemLocationCodeType | Specifies whether the filter should be for items located in the country            specified
     * in Country or available to that country.
     */
    public $ItemLocation;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SearchLocationType | Specifies filtering based on site ID.
     */
    public $SearchLocation;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CurrencyCodeType | Limits the result set to just those items with a specified currency.
     */
    public $Currency;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param CountryCodeType $val
     * @throws Exception
     */
    public function setCountryCode($val)
    {
        $this->CountryCode = $val;
    }

    /**
     * @param ItemLocationCodeType $val
     * @throws Exception
     */
    public function setItemLocation($val)
    {
        $this->ItemLocation = $val;
    }

    /**
     * @param SearchLocationType $val
     * @throws Exception
     */
    public function setSearchLocation($val)
    {
        $this->SearchLocation = $val;
    }

    /**
     * @param CurrencyCodeType $val
     * @throws Exception
     */
    public function setCurrency($val)
    {
        $this->Currency = $val;
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
