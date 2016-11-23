<?php

namespace Controle;

/**
 * CurrencyDetailsType
 * Details about a currency.
 */
class CurrencyDetailsType
{
    // @codingStandardsIgnoreStart
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
    // @codingStandardsIgnoreEnd

    /**
     * @param CurrencyCodeType $val
     * @throws Exception
     */
    public function setCurrency($val)
    {
        $this->Currency = (int)$val;
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
        $this->Description = (int)$val;
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
