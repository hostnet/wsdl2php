<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Debtor;

class Update
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Debtor
     */
    public $debtor;
    /**
     * @param Debtor $val
     * @throws Exception
     */
    public function setDebtor($val)
    {
        $this->debtor = (int)$val;
    }
}
