<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar;

class InsertCurrentResponse
{
    /**
     * @var int
     */
    public $hourcomponentvar_insertcurrentresult;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setHourComponentVarInsertCurrentResult($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->hourcomponentvar_insertcurrentresult = (int)$val;
    }
}
