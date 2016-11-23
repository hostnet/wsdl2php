<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Address;

class Update
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
        $this->CompanyId = (int)$val;
    }

    /**
     * @param Address $val
     * @throws Exception
     */
    public function setAddress($val)
    {
        $this->Address = (int)$val;
    }
}