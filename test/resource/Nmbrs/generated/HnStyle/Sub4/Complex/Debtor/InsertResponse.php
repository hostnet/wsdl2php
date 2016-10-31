<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Debtor;

class InsertResponse
{
    /**
     * @var int
     */
    public $debtor_insertresult;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setDebtorInsertResult($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->debtor_insertresult = (int)$val;
    }
}
