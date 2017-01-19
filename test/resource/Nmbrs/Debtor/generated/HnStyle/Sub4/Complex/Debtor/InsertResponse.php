<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Debtor;

class InsertResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $Debtor_InsertResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setDebtorInsertResult($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Debtor_InsertResult = $val;
    }
}
