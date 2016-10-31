<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\BankAccount;

class InsertCurrentResponse
{
    /**
     * @var int
     */
    public $bankaccount_insertcurrentresult;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setBankAccountInsertCurrentResult($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->bankaccount_insertcurrentresult = (int)$val;
    }
}
