<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SalaryTableEmployee extends
 \Controle\Hostnet\Namesp\Sub4\Complex\SalaryTable
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SalaryTableScale
     */
    public $schaal;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SalaryTableStep
     */
    public $trede;
    /**
     * @param SalaryTableScale $val
     * @throws Exception
     */
    public function setSchaal($val)
    {
        $this->schaal = (int)$val;
    }

    /**
     * @param SalaryTableStep $val
     * @throws Exception
     */
    public function setTrede($val)
    {
        $this->trede = (int)$val;
    }
}
