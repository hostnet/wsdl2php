<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\DaysVar;

class GetResponse
{
    /**
     * @var int
     */
    public $daysvar_getresult;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setDaysVarGetResult($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->daysvar_getresult = (int)$val;
    }
}
