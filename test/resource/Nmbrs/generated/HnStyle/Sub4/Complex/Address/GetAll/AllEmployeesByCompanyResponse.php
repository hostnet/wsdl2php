<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Address\GetAll;

class AllEmployeesByCompanyResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\EmployeeAddressItem
     */
    public $address_getall_allemployeesbycompanyresult;
    /**
     * @param ArrayOfEmployeeAddressItem $val
     * @throws Exception
     */
    public function setAddressGetAllAllEmployeesByCompanyResult($val)
    {
        $this->address_getall_allemployeesbycompanyresult = (int)$val;
    }
}
