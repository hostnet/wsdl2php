<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Address;

class GetResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Address
     */
    public $address_getresult;
    /**
     * @param Address $val
     * @throws Exception
     */
    public function setAddressGetResult($val)
    {
        $this->address_getresult = (int)$val;
    }
}
