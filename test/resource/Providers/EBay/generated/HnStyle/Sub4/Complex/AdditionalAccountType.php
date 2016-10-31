<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * AdditionalAccountType
 * Contains the data for one additional account. An additional account is            created
 * when the user has an active account and changes country of            registry (i.e., registers
 * with the eBay site for the new country). A            new account is created and the old
 * account becomes inactive as an            additional account. A user who never changes country
 * of residency while            having an account will never have any additional accounts.
 */
class AdditionalAccountType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Indicates the current balance of the additional account.
     */
    public $balance;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CurrencyCodeType | Limits the result set to just those items with a specified currency.
     */
    public $currency;
    /**
     * @var string | Indicates the unique identifier for the additional account (the account ID).
     */
    public $accountcode;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setBalance($val)
    {
        $this->balance = (int)$val;
    }

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
    public function setAccountCode($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for AccountCode');
        }
        $this->accountcode = (int)$val;
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
