<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class Payslip
{
    // @codingStandardsIgnoreStart
    /**
     * @var base64Binary
     */
    public $PDF;
    // @codingStandardsIgnoreEnd

    /**
     * @param base64Binary $val
     * @throws \Exception
     */
    public function setPDF($val)
    {
        $this->PDF = $val;
    }
}
