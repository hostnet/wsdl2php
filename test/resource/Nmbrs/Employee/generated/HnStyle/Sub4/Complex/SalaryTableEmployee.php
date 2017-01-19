<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SalaryTableEmployee extends
 \Controle\Hostnet\Namesp\Sub4\Complex\SalaryTable
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SalaryTableScale
     */
    public $Schaal;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SalaryTableStep
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
