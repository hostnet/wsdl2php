<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Address\GetAll;

class AllEmployeesByCompany
{
    /**
     * @var int
     */
    public $companyid;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setCompanyID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->companyid = (int)$val;
    }
}
