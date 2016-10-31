<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class CharityIdType
{
    /**
     * @var string
     */
    public $_;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CharityAffiliationTypeCodeType
     */
    public $type;
    /**
     * @param string $val
     * @throws Exception
     */
    public function set($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for _');
        }
        $this->_ = (int)$val;
    }

    /**
     * @param CharityAffiliationTypeCodeType $val
     * @throws Exception
     */
    public function setType($val)
    {
        $this->type = (int)$val;
    }
}
