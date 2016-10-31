<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Absence;

class GetList
{
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setEmployeeId($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->employeeid = (int)$val;
    }
}
