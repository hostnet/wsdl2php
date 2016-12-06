<?php

namespace Controle\sub1\sub2;

/**
 * PromotionRuleArrayType
 * Contains a list of cross-promotion rules. Each PromotionRuleType defines one rule.
 */
class PromotionRuleArrayType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\PromotionRuleType | Defines one cross-promotion rule.
	 */
	public $PromotionRule;
	// @codingStandardsIgnoreEnd

	/**
	 * @param PromotionRuleType $val
	 * @throws Exception
	 */
	public function setPromotionRule($val)
	{
        $this->PromotionRule = $val;
	}
}
