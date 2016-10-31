<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar;

class InsertResponse
{
    /**
     * @var int
     */
    public $wagecomponentvar_insertresult;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setWageComponentVarInsertResult($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->wagecomponentvar_insertresult = (int)$val;
    }
}
