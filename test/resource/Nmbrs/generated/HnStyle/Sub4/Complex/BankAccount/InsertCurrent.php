<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\BankAccount;

class InsertCurrent
{
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\BankAccount
     */
    public $bankaccount;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setEmployeeId($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->employeeid = (int)$val;
    }

    /**
     * @param BankAccount $val
     * @throws Exception
     */
    public function setBankAccount($val)
    {
        $this->bankaccount = (int)$val;
    }
}
