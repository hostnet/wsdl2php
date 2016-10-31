<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class Leave
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var decimal
     */
    public $hours;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\LeaveUsageType
     */
    public $usagetype;
    /**
     * @var dateTime
     */
    public $start;
    /**
     * @var dateTime
     */
    public $end;
    /**
     * @var decimal
     */
    public $starthours;
    /**
     * @var decimal
     */
    public $endhours;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\LeaveType
     */
    public $type;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\LeaveStatus
     */
    public $status;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setDescription($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Description');
        }
        $this->description = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setHours($val)
    {
        $this->hours = (int)$val;
    }

    /**
     * @param LeaveUsageType $val
     * @throws Exception
     */
    public function setUsageType($val)
    {
        $this->usagetype = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setStart($val)
    {
        $this->start = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setEnd($val)
    {
        $this->end = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setStartHours($val)
    {
        $this->starthours = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setEndHours($val)
    {
        $this->endhours = (int)$val;
    }

    /**
     * @param LeaveType $val
     * @throws Exception
     */
    public function setType($val)
    {
        $this->type = (int)$val;
    }

    /**
     * @param LeaveStatus $val
     * @throws Exception
     */
    public function setStatus($val)
    {
        $this->status = (int)$val;
    }
}
