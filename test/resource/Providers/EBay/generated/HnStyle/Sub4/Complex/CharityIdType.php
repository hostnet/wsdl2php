<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class CharityIdType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $_;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CharityAffiliationTypeCodeType
     */
    public $type;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function set($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for _');
        }
        $this->_ = ()$val;
    }

    /**
     * @param CharityAffiliationTypeCodeType $val
     * @throws Exception
     */
    public function setType($val)
    {
        $this->type = ()$val;
    }
}
