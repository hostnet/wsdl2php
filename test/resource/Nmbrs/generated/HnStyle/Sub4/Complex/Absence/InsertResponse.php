<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Absence;

class InsertResponse
{
    /**
     * @var int
     */
    public $absence_insertresult;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setAbsenceInsertResult($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->absence_insertresult = (int)$val;
    }
}
