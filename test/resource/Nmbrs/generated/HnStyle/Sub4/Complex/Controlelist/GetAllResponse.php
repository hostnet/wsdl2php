<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Controlelist;

class GetAllResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Debtor
     */
    public $list_getallresult;
    /**
     * @param ArrayOfDebtor $val
     * @throws Exception
     */
    public function setListGetAllResult($val)
    {
        $this->list_getallresult = (int)$val;
    }
}
