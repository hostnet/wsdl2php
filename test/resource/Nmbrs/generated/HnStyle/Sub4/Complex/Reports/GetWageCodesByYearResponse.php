<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Reports;

class GetWageCodesByYearResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $Reports_GetWageCodesByYearResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setReportsGetWageCodesByYearResult($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Reports_GetWageCodesByYearResult');
        }
        $this->Reports_GetWageCodesByYearResult = (int)$val;
    }
}
