<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\BankAccount;

class InsertResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $BankAccount_InsertResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws Exception
     */
    public function setBankAccountInsertResult($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->BankAccount_InsertResult = $val;
    }
}
