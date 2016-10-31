<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction;

class Insert
{
    /**
     * @var int
     */
    public $debtorid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Function
     */
    public $function;
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
     * @param Function $val
     * @throws Exception
     */
    public function setFunction($val)
    {
        $this->function = (int)$val;
    }
}
