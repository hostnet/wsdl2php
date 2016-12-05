<?php

namespace Controle;

/**
 * ExpressPicturesRequiredDefinitionType
 * For the US and Germany sites, an eBay item must meet a number of eligibility requirements
 * in order to also be included on eBay Express. One requirement is that the item must include
 * a picture (or gallery image). Currently, this type defines no special meta-data. (An empty
 * element is returned.)
 */
class ExpressPicturesRequiredDefinitionType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = ()$val;
    }
}
