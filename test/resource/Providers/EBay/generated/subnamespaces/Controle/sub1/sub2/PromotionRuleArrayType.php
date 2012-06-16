<?php

namespace Controle\sub1\sub2;
/**
 * PromotionRuleArrayType
 * Contains a list of cross-promotion rules. Each PromotionRuleType defines one rule.
 */
class PromotionRuleArrayType {
	/**
	 * @var \Controle\sub1\sub2\PromotionRuleType | Defines one cross-promotion rule.
	 */
	public $PromotionRule;
	/**
	 * @param PromotionRuleType $val
	 * @throws Exception
	 */
	public function setPromotionRule($val) {
		
		$this->PromotionRule = (int)$val;
	}

}

