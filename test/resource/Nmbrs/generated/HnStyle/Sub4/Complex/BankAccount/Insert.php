<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\BankAccount;

class Insert
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $CompanyId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\BankAccount
     */
    public $BankAccount;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws Exception
     */
    public function setCompanyId($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = (int)$val;
    }

    /**
     * @param BankAccount $val
     * @throws Exception
     */
    public function setBankAccount($val)
    {
        $this->BankAccount = (int)$val;
    }
}
