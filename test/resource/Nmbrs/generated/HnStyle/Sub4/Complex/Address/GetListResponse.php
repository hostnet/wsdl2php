<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Address;

class GetListResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\EmployeeAddress
     */
    public $address_getlistresult;
    /**
     * @param ArrayOfEmployeeAddress $val
     * @throws Exception
     */
    public function setAddressGetListResult($val)
    {
        $this->address_getlistresult = (int)$val;
    }
}
