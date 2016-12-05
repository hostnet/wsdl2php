<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Address;

class Insert
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $CompanyId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Address
     */
    public $Address;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws Exception
     */
    public function setCompanyId($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = ()$val;
    }

    /**
     * @param Address $val
     * @throws Exception
     */
    public function setAddress($val)
    {
        $this->Address = ()$val;
    }
}
