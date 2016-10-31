<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SalaryInput
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
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SalaryTableEmployeeInput
     */
    public $salarytable;
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
     * @param SalaryTableEmployeeInput $val
     * @throws Exception
     */
    public function setSalaryTable($val)
    {
        $this->salarytable = (int)$val;
    }
}
