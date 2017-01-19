<?php

namespace Controle;

class SalaryTableEmployee extends
 \Controle\SalaryTable
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\SalaryTableScale
     */
    public $Schaal;
    /**
     * @var \Controle\SalaryTableStep
     */
    public $Trede;
    // @codingStandardsIgnoreEnd

    /**
     * @param SalaryTableScale $val
     * @throws \Exception
     */
    public function setSchaal($val)
    {
        $this->Schaal = $val;
    }

    /**
     * @param SalaryTableStep $val
     * @throws \Exception
     */
    public function setTrede($val)
    {
        $this->Trede = $val;
    }
}
