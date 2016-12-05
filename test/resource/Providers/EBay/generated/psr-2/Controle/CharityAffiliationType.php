<?php

namespace Controle;

/**
 * CharityAffiliationType
 * Defines the affiliation status for a nonprofit charity organization registered with the
 * dedicated eBay Giving Works provider.
 */
class CharityAffiliationType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @var string
     */
    public $id;
    /**
     * @var \Controle\CharityAffiliationTypeCodeType
     */
    public $type;
    // @codingStandardsIgnoreEnd

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = ()$val;
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
        $this->id = ()$val;
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
