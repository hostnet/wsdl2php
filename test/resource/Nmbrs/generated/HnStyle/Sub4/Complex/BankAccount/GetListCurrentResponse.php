<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\BankAccount;

class GetListCurrentResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\BankAccount
     */
    public $bankaccount_getlistcurrentresult;
    /**
     * @param ArrayOfBankAccount $val
     * @throws Exception
     */
    public function setBankAccountGetListCurrentResult($val)
    {
        $this->bankaccount_getlistcurrentresult = (int)$val;
    }
}
