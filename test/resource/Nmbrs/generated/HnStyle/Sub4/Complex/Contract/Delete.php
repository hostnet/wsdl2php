<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Contract;

class Delete
{
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @var int
     */
    public $id;
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
    public function setId($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->id = (int)$val;
    }
}
