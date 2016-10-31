<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Controlelist;

class GetByNumberResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Debtor
     */
    public $list_getbynumberresult;
    /**
     * @param ArrayOfDebtor $val
     * @throws Exception
     */
    public function setListGetByNumberResult($val)
    {
        $this->list_getbynumberresult = (int)$val;
    }
}
