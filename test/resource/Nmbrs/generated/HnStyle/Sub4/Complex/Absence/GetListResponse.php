<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Absence;

class GetListResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Absence
     */
    public $absence_getlistresult;
    /**
     * @param ArrayOfAbsence $val
     * @throws Exception
     */
    public function setAbsenceGetListResult($val)
    {
        $this->absence_getlistresult = (int)$val;
    }
}
