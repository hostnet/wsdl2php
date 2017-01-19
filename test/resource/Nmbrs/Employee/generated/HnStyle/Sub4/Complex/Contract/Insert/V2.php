<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Contract\Insert;

class V2
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $EmployeeId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Contract\v2
     */
    public $Contract;
    /**
     * @var boolean
     */
    public $UnprotectedMode;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setEmployeeId($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->EmployeeId = $val;
    }

    /**
     * @param Contract_v2 $val
     * @throws \Exception
     */
    public function setContract($val)
    {
        $this->Contract = $val;
    }

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setUnprotectedMode($val)
    {
        $this->UnprotectedMode = $val;
    }
}
