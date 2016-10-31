<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Debtor;

class GetResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Debtor
     */
    public $debtor_getresult;
    /**
     * @param Debtor $val
     * @throws Exception
     */
    public function setDebtorGetResult($val)
    {
        $this->debtor_getresult = (int)$val;
    }
}
