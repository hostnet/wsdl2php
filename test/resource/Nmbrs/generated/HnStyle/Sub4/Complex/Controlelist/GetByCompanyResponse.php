<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Controlelist;

class GetByCompanyResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Employee
     */
    public $list_getbycompanyresult;
    /**
     * @param ArrayOfEmployee $val
     * @throws Exception
     */
    public function setListGetByCompanyResult($val)
    {
        $this->list_getbycompanyresult = (int)$val;
    }
}
