<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar;

class InsertCurrentResponse
{
    /**
     * @var int
     */
    public $wagecomponentvar_insertcurrentresult;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setWageComponentVarInsertCurrentResult($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->wagecomponentvar_insertcurrentresult = (int)$val;
    }
}
