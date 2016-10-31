<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction;

class UpdateCurrent
{
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @var int
     */
    public $functionid;
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

    /**
     * @param int $val
     * @throws Exception
     */
    public function setFunctionId($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->functionid = (int)$val;
    }
}
