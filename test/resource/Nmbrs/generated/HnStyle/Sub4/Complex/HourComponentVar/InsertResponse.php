<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar;

class InsertResponse
{
    /**
     * @var int
     */
    public $hourcomponentvar_insertresult;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setHourComponentVarInsertResult($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->hourcomponentvar_insertresult = (int)$val;
    }
}
