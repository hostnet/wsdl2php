<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed;

class InsertCurrentResponse
{
    /**
     * @var int
     */
    public $wagecomponentfixed_insertcurrentresult;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setWageComponentFixedInsertCurrentResult($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->wagecomponentfixed_insertcurrentresult = (int)$val;
    }
}
