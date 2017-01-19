<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\BankAccount;

class InsertCurrent
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $EmployeeId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\BankAccount
     */
    public $BankAccount;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setEmployeeId($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->EmployeeId = $val;
    }

    /**
     * @param BankAccount $val
     * @throws \Exception
     */
    public function setBankAccount($val)
    {
        $this->BankAccount = $val;
    }
}
