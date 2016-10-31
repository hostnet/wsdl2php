<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class Salary
{
    /**
     * @var decimal
     */
    public $value;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SalaryType
     */
    public $type;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SalaryTableEmployee
     */
    public $salarytable;
    /**
     * @var dateTime
     */
    public $startdate;
    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setValue($val)
    {
        $this->value = (int)$val;
    }

    /**
     * @param SalaryType $val
     * @throws Exception
     */
    public function setType($val)
    {
        $this->type = (int)$val;
    }

    /**
     * @param SalaryTableEmployee $val
     * @throws Exception
     */
    public function setSalaryTable($val)
    {
        $this->salarytable = (int)$val;
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
