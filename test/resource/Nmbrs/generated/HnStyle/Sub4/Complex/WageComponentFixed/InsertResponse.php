<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed;

class InsertResponse
{
    /**
     * @var int
     */
    public $wagecomponentfixed_insertresult;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setWageComponentFixedInsertResult($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->wagecomponentfixed_insertresult = (int)$val;
    }
}
