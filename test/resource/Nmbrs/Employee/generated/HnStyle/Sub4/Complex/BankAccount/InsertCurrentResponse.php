<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\BankAccount;

class InsertCurrentResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $BankAccount_InsertCurrentResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setBankAccountInsertCurrentResult($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->BankAccount_InsertCurrentResult = $val;
    }
}
