<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Company;

class GetCurrentPeriodResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $Company_GetCurrentPeriodResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCompanyGetCurrentPeriodResult($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Company_GetCurrentPeriodResult');
        }
        $this->Company_GetCurrentPeriodResult = ()$val;
    }
}
