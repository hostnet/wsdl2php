<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * PromotionRuleArrayType
 * Contains a list of cross-promotion rules. Each PromotionRuleType defines one rule.
 */
class PromotionRuleArrayType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PromotionRuleType | Defines one cross-promotion rule.
     */
    public $promotionrule;
    /**
     * @param PromotionRuleType $val
     * @throws Exception
     */
    public function setPromotionRule($val)
    {
        $this->promotionrule = (int)$val;
    }
}
