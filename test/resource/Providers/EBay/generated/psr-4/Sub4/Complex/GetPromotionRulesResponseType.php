<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetPromotionRulesResponseType
 * Returns a list of promotion rules associated with a specific item or store category.
 */
class GetPromotionRulesResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PromotionRuleArrayType | Specifies a list of cross-promotion rules to set. Each rule defines a referring item
     * or store category and the cross-promoted items or store categories.
     */
    public $promotionrulearray;
    /**
     * @param PromotionRuleArrayType $val
     * @throws Exception
     */
    public function setPromotionRuleArray($val)
    {
        $this->promotionrulearray = (int)$val;
    }
}
