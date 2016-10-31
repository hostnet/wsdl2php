<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Address;

class GetListCurrentResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\EmployeeAddress
     */
    public $address_getlistcurrentresult;
    /**
     * @param ArrayOfEmployeeAddress $val
     * @throws Exception
     */
    public function setAddressGetListCurrentResult($val)
    {
        $this->address_getlistcurrentresult = (int)$val;
    }
}
