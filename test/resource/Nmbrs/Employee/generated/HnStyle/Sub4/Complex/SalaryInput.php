<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SalaryInput
{
    // @codingStandardsIgnoreStart
    /**
     * @var decimal
     */
    public $Value;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SalaryType
     */
    public $Type;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SalaryTableEmployeeInput
     */
    public $SalaryTable;
    // @codingStandardsIgnoreEnd

    /**
     * @param decimal $val
     * @throws \Exception
     */
    public function setValue($val)
    {
        $this->Value = $val;
    }

    /**
     * @param SalaryType $val
     * @throws \Exception
     */
    public function setType($val)
    {
        $this->Type = $val;
    }

    /**
     * @param SalaryTableEmployeeInput $val
     * @throws \Exception
     */
    public function setSalaryTable($val)
    {
        $this->SalaryTable = $val;
    }
}
