<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class Leave
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $Description;
    /**
     * @var decimal
     */
    public $Hours;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\LeaveUsageType
     */
    public $UsageType;
    /**
     * @var dateTime
     */
    public $Start;
    /**
     * @var dateTime
     */
    public $End;
    /**
     * @var decimal
     */
    public $StartHours;
    /**
     * @var decimal
     */
    public $EndHours;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\LeaveType
     */
    public $Type;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\LeaveStatus
     */
    public $Status;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setDescription($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Description');
        }
        $this->Description = $val;
    }

    /**
     * @param decimal $val
     * @throws \Exception
     */
    public function setHours($val)
    {
        $this->Hours = $val;
    }

    /**
     * @param LeaveUsageType $val
     * @throws \Exception
     */
    public function setUsageType($val)
    {
        $this->UsageType = $val;
    }

    /**
     * @param dateTime $val
     * @throws \Exception
     */
    public function setStart($val)
    {
        $this->Start = $val;
    }

    /**
     * @param dateTime $val
     * @throws \Exception
     */
    public function setEnd($val)
    {
        $this->End = $val;
    }

    /**
     * @param decimal $val
     * @throws \Exception
     */
    public function setStartHours($val)
    {
        $this->StartHours = $val;
    }

    /**
     * @param decimal $val
     * @throws \Exception
     */
    public function setEndHours($val)
    {
        $this->EndHours = $val;
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
     * @param LeaveStatus $val
     * @throws \Exception
     */
    public function setStatus($val)
    {
        $this->Status = $val;
    }
}
