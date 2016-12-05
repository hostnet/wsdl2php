<?php

namespace Controle;

/**
 * PromotionRuleArrayType
 * Contains a list of cross-promotion rules. Each PromotionRuleType defines one rule.
 */
class PromotionRuleArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\PromotionRuleType | Defines one cross-promotion rule.
     */
    public $PromotionRule;
    // @codingStandardsIgnoreEnd

    /**
     * @param PromotionRuleType $val
     * @throws Exception
     */
    public function setPromotionRule($val)
    {
        $this->PromotionRule = ()$val;
    }
}
