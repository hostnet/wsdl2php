<?php

namespace Controle;

/**
 * ExpressConditionRequiredDefinitionType
 * For the US and Germany sites, an eBay item must meet a number of eligibility requirements
 * in order to also be included on eBay Express. One requirement is that the item must include
 * the Item Condition attribute (using Item Specifics). Some categories may waive this requirement. Currently,
 * this type defines no special meta-data. (An empty element is returned.)
 */
class ExpressConditionRequiredDefinitionType
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
        $this->any = (<anyXML>)$val;
    }
}
