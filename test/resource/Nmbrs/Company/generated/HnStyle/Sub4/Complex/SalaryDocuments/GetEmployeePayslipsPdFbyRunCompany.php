<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\SalaryDocuments;

class GetEmployeePayslipsPdFbyRunCompany
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $EmployeeID;
    /**
     * @var int
     */
    public $CompanyId;
    /**
     * @var int
     */
    public $RunID;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setEmployeeID($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->EmployeeID = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setCompanyId($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setRunID($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->RunID = $val;
    }
}
