<?php

namespace Controle;

/**
 * CurrencyDetailsType
 * Details about a currency.
 */
class CurrencyDetailsType
{
	/**
	 * @var \Controle\CurrencyCodeType | Limits the result set to just those items with a specified currency.
	 */
	public $currency;
	/**
	 * @var string | Description of a Want It Now post. Description will not be returned for GetWantItNowSearchResults.
	 */
	public $description;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param CurrencyCodeType $val
	 * @throws Exception
	 */
	public function setCurrency($val)
	{
        $this->currency = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDescription($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Description');
        }
        $this->description = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (int)$val;
	}
}
