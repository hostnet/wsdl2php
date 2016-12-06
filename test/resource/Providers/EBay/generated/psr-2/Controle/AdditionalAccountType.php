<?php

namespace Controle;

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
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\AmountType | Indicates the current balance of the additional account.
     */
    public $Balance;
    /**
     * @var \Controle\CurrencyCodeType | Limits the result set to just those items with a specified currency.
     */
    public $Currency;
    /**
     * @var string | Indicates the unique identifier for the additional account (the account ID).
     */
    public $AccountCode;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setBalance($val)
    {
        $this->Balance = $val;
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
     * @param string $val
     * @throws Exception
     */
    public function setAccountCode($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for AccountCode');
        }
        $this->AccountCode = $val;
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
