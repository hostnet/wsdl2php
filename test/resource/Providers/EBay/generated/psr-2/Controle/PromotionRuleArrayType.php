<?php

namespace Controle;

/**
 * PromotionRuleArrayType
 * Contains a list of cross-promotion rules. Each PromotionRuleType defines one rule.
 */
class PromotionRuleArrayType
{
    /**
     * @var \Controle\PromotionRuleType | Defines one cross-promotion rule.
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
