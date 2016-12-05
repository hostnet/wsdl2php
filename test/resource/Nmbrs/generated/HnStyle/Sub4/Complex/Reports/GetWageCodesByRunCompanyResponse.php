<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Reports;

class GetWageCodesByRunCompanyResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $Reports_GetWageCodesByRunCompanyResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setReportsGetWageCodesByRunCompanyResult($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Reports_GetWageCodesByRunCompanyResult');
        }
        $this->Reports_GetWageCodesByRunCompanyResult = (string)$val;
    }
}
