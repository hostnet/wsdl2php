<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction;

class Delete
{
    /**
     * @var int
     */
    public $debtorid;
    /**
     * @var int
     */
    public $id;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setDebtorId($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->debtorid = (int)$val;
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
