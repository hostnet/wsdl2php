<?php

namespace Controle;

class FulltimeSchedule
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\ScheduleCalcMethod
     */
    public $ScheduleCalcMethod;
    /**
     * @var decimal
     */
    public $HoursMonday;
    /**
     * @var decimal
     */
    public $HoursTuesday;
    /**
     * @var decimal
     */
    public $HoursWednesday;
    /**
     * @var decimal
     */
    public $HoursThursday;
    /**
     * @var decimal
     */
    public $HoursFriday;
    /**
     * @var decimal
     */
    public $HoursSaturday;
    /**
     * @var decimal
     */
    public $HoursSunday;
    /**
     * @var decimal
     */
    public $HoursMonday2;
    /**
     * @var decimal
     */
    public $HoursTuesday2;
    /**
     * @var decimal
     */
    public $HoursWednesday2;
    /**
     * @var decimal
     */
    public $HoursThursday2;
    /**
     * @var decimal
     */
    public $HoursFriday2;
    /**
     * @var decimal
     */
    public $HoursSaturday2;
    /**
     * @var decimal
     */
    public $HoursSunday2;
    // @codingStandardsIgnoreEnd

    /**
     * @param ScheduleCalcMethod $val
     * @throws Exception
     */
    public function setScheduleCalcMethod($val)
    {
        $this->ScheduleCalcMethod = (ScheduleCalcMethod)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setHoursMonday($val)
    {
        $this->HoursMonday = (decimal)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setHoursTuesday($val)
    {
        $this->HoursTuesday = (decimal)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setHoursWednesday($val)
    {
        $this->HoursWednesday = (decimal)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setHoursThursday($val)
    {
        $this->HoursThursday = (decimal)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setHoursFriday($val)
    {
        $this->HoursFriday = (decimal)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setHoursSaturday($val)
    {
        $this->HoursSaturday = (decimal)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setHoursSunday($val)
    {
        $this->HoursSunday = (decimal)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setHoursMonday2($val)
    {
        $this->HoursMonday2 = (decimal)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setHoursTuesday2($val)
    {
        $this->HoursTuesday2 = (decimal)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setHoursWednesday2($val)
    {
        $this->HoursWednesday2 = (decimal)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setHoursThursday2($val)
    {
        $this->HoursThursday2 = (decimal)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setHoursFriday2($val)
    {
        $this->HoursFriday2 = (decimal)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setHoursSaturday2($val)
    {
        $this->HoursSaturday2 = (decimal)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setHoursSunday2($val)
    {
        $this->HoursSunday2 = (decimal)$val;
    }
}
