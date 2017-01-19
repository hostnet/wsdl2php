<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo\GetAll;

class AllEmployeesByCompanyResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfoItem
     */
    public $PersonalInfo_GetAll_AllEmployeesByCompanyResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param ArrayOfPersonalInfoItem $val
     * @throws \Exception
     */
    public function setPersonalInfoGetAllAllEmployeesByCompanyResult($val)
    {
        $this->PersonalInfo_GetAll_AllEmployeesByCompanyResult = $val;
    }
}
