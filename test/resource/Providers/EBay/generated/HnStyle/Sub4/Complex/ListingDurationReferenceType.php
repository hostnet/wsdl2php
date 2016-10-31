<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ListingDurationReferenceType
 * Identifies the type of listing as an attribute on the ListingDuration node.
 */
class ListingDurationReferenceType
{
    /**
     * @var int
     */
    public $_;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ListingTypeCodeType
     */
    public $type;
    /**
     * @param int $val
     * @throws Exception
     */
    public function set($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->_ = (int)$val;
    }

    /**
     * @param ListingTypeCodeType $val
     * @throws Exception
     */
    public function setType($val)
    {
        $this->type = (int)$val;
    }
}
