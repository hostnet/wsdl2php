<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Contract\Insert;

class V2
{
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Contract\v2
     */
    public $contract;
    /**
     * @var boolean
     */
    public $unprotectedmode;
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
     * @param Contract_v2 $val
     * @throws Exception
     */
    public function setContract($val)
    {
        $this->contract = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setUnprotectedMode($val)
    {
        $this->unprotectedmode = (int)$val;
    }
}
