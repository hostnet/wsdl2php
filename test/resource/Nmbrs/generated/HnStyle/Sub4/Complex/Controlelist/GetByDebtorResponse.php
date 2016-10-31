<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Controlelist;

class GetByDebtorResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Employee
     */
    public $list_getbydebtorresult;
    /**
     * @param ArrayOfEmployee $val
     * @throws Exception
     */
    public function setListGetByDebtorResult($val)
    {
        $this->list_getbydebtorresult = (int)$val;
    }
}
