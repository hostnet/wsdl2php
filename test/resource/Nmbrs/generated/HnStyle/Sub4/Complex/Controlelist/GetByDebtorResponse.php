<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Controlelist;

class GetByDebtorResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Company
     */
    public $List_GetByDebtorResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param ArrayOfCompany $val
     * @throws Exception
     */
    public function setListGetByDebtorResult($val)
    {
        $this->List_GetByDebtorResult = (int)$val;
    }
}
