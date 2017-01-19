<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Salary\GetAll;

class AllEmployeesByCompany
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $CompanyID;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setCompanyID($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->CompanyID = $val;
    }
}
