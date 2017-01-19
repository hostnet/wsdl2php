<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Controlelist;

class GetByCompanyResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Employee
     */
    public $List_GetByCompanyResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param ArrayOfEmployee $val
     * @throws \Exception
     */
    public function setListGetByCompanyResult($val)
    {
        $this->List_GetByCompanyResult = $val;
    }
}
