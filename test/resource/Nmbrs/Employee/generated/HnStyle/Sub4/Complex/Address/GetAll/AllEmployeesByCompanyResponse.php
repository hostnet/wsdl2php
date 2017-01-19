<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Address\GetAll;

class AllEmployeesByCompanyResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\EmployeeAddressItem
     */
    public $Address_GetAll_AllEmployeesByCompanyResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param ArrayOfEmployeeAddressItem $val
     * @throws \Exception
     */
    public function setAddressGetAllAllEmployeesByCompanyResult($val)
    {
        $this->Address_GetAll_AllEmployeesByCompanyResult = $val;
    }
}
