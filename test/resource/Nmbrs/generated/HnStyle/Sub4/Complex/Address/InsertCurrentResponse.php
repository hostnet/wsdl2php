<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Address;

class InsertCurrentResponse
{
    /**
     * @var int
     */
    public $address_insertcurrentresult;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setAddressInsertCurrentResult($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->address_insertcurrentresult = (int)$val;
    }
}
