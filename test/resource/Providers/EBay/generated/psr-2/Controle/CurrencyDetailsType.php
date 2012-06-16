<?php

namespace Controle;
/**
 * CurrencyDetailsType
 * Details about a currency.
 */
class CurrencyDetailsType {
    /**
     * @var \Controle\CurrencyCodeType | Limits the result set to just those items with a specified currency.
     */
    public $Currency;
    /**
     * @var string | Description of a Want It Now post. Description will not be returned for GetWantItNowSearchResults.
     */
    public $Description;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}

