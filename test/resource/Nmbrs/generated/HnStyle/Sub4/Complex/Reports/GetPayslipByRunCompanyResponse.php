<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Reports;

class GetPayslipByRunCompanyResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $Reports_GetPayslipByRunCompanyResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setReportsGetPayslipByRunCompanyResult($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Reports_GetPayslipByRunCompanyResult');
        }
        $this->Reports_GetPayslipByRunCompanyResult = (string)$val;
    }
}
