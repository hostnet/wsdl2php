<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class Schedule
{
    /**
     * @var decimal
     */
    public $hoursmonday;
    /**
     * @var decimal
     */
    public $hourstuesday;
    /**
     * @var decimal
     */
    public $hourswednesday;
    /**
     * @var decimal
     */
    public $hoursthursday;
    /**
     * @var decimal
     */
    public $hoursfriday;
    /**
     * @var decimal
     */
    public $hourssaturday;
    /**
     * @var decimal
     */
    public $hourssunday;
    /**
     * @var decimal
     */
    public $hoursmonday2;
    /**
     * @var decimal
     */
    public $hourstuesday2;
    /**
     * @var decimal
     */
    public $hourswednesday2;
    /**
     * @var decimal
     */
    public $hoursthursday2;
    /**
     * @var decimal
     */
    public $hoursfriday2;
    /**
     * @var decimal
     */
    public $hourssaturday2;
    /**
     * @var decimal
     */
    public $hourssunday2;
    /**
     * @var decimal
     */
    public $parttimepercentage;
    /**
     * @var dateTime
     */
    public $startdate;
    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setHoursMonday($val)
    {
        $this->hoursmonday = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setHoursTuesday($val)
    {
        $this->hourstuesday = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setHoursWednesday($val)
    {
        $this->hourswednesday = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setHoursThursday($val)
    {
        $this->hoursthursday = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setHoursFriday($val)
    {
        $this->hoursfriday = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setHoursSaturday($val)
    {
        $this->hourssaturday = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setHoursSunday($val)
    {
        $this->hourssunday = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setHoursMonday2($val)
    {
        $this->hoursmonday2 = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setHoursTuesday2($val)
    {
        $this->hourstuesday2 = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setHoursWednesday2($val)
    {
        $this->hourswednesday2 = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setHoursThursday2($val)
    {
        $this->hoursthursday2 = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setHoursFriday2($val)
    {
        $this->hoursfriday2 = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setHoursSaturday2($val)
    {
        $this->hourssaturday2 = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setHoursSunday2($val)
    {
        $this->hourssunday2 = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setParttimePercentage($val)
    {
        $this->parttimepercentage = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setStartDate($val)
    {
        $this->startdate = (int)$val;
    }
}
