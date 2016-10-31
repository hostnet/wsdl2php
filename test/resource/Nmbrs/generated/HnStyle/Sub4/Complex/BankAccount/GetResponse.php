<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\BankAccount;

class GetResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\BankAccount
     */
    public $bankaccount_getresult;
    /**
     * @param BankAccount $val
     * @throws Exception
     */
    public function setBankAccountGetResult($val)
    {
        $this->bankaccount_getresult = (int)$val;
    }
}
