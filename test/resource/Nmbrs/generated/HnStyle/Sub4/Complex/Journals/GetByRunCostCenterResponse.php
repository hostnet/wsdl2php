<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Journals;

class GetByRunCostCenterResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $Journals_GetByRunCostCenterResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setJournalsGetByRunCostCenterResult($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Journals_GetByRunCostCenterResult');
        }
        $this->Journals_GetByRunCostCenterResult = (string)$val;
    }
}
