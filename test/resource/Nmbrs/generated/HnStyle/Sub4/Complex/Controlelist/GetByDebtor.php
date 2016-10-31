<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Controlelist;

class GetByDebtor
{
    /**
     * @var int
     */
    public $debtorid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Active
     */
    public $active;
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
     * @param Active $val
     * @throws Exception
     */
    public function setActive($val)
    {
        $this->active = (int)$val;
    }
}
