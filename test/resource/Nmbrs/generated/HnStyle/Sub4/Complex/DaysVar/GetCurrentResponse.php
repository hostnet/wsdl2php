<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\DaysVar;

class GetCurrentResponse
{
    /**
     * @var int
     */
    public $daysvar_getcurrentresult;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setDaysVarGetCurrentResult($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->daysvar_getcurrentresult = (int)$val;
    }
}
