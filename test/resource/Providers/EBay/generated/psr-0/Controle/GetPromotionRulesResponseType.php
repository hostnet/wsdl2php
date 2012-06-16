<?php

namespace Controle;
/**
 * GetPromotionRulesResponseType
 * Returns a list of promotion rules associated with a specific item or store category.
 */
class GetPromotionRulesResponseType extends \Controle\AbstractResponseType {
	/**
	 * @var \Controle\PromotionRuleArrayType | Specifies a list of cross-promotion rules to set. Each rule defines a referring item or
	 * store category and the cross-promoted items or store categories.
	 */
	public $PromotionRuleArray;
}

