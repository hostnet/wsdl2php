<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * CharityAffiliationType
 * Defines the affiliation status for a nonprofit charity organization registered with the
 * dedicated eBay Giving Works provider.
 */
class CharityAffiliationType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @var string
     */
    public $id;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CharityAffiliationTypeCodeType
     */
    public $type;
    // @codingStandardsIgnoreEnd

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for id');
        }
        $this->id = (int)$val;
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
