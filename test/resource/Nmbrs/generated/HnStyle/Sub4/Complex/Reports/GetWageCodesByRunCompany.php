<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Reports;

class GetWageCodesByRunCompany
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $CompanyId;
    /**
     * @var int
     */
    public $RunId;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws Exception
     */
    public function setCompanyId($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setRunId($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->RunId = (int)$val;
    }
}
