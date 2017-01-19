<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Leave;

class GetList
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $EmployeeId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\LeaveType
     */
    public $Type;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\LeaveUsageType
     */
    public $Soort;
    /**
     * @var int
     */
    public $Year;
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
     * @param LeaveType $val
     * @throws \Exception
     */
    public function setType($val)
    {
        $this->Type = $val;
    }

    /**
     * @param LeaveUsageType $val
     * @throws \Exception
     */
    public function setSoort($val)
    {
        $this->Soort = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setYear($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Year = $val;
    }
}
