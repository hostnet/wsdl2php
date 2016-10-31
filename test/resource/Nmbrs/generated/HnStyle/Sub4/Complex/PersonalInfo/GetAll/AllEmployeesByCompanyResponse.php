<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo\GetAll;

class AllEmployeesByCompanyResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfoItem
     */
    public $personalinfo_getall_allemployeesbycompanyresult;
    /**
     * @param ArrayOfPersonalInfoItem $val
     * @throws Exception
     */
    public function setPersonalInfoGetAllAllEmployeesByCompanyResult($val)
    {
        $this->personalinfo_getall_allemployeesbycompanyresult = (int)$val;
    }
}
