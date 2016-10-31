<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * SetPromotionRulesRequestType
 * Defines one or more cross-promotion rules for an item or store category. You must be a seller
 * and the owner of an eBay Stores storefront to use SetPromotionRules.
 */
class SetPromotionRulesRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\OperationTypeCodeType | Specifies whether the update is for item rules or default rules for the promotion type.
     * Allowed values are ItemRules or ReplaceAllDefaultRules. Required when setting default
     * rules.
     */
    public $operationtype;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PromotionRuleArrayType | Specifies a list of cross-promotion rules to set. Each rule defines a referring item
     * or store category and the cross-promoted items or store categories.
     */
    public $promotionrulearray;
    /**
     * @param OperationTypeCodeType $val
     * @throws Exception
     */
    public function setOperationType($val)
    {
        $this->operationtype = (int)$val;
    }

    /**
     * @param PromotionRuleArrayType $val
     * @throws Exception
     */
    public function setPromotionRuleArray($val)
    {
        $this->promotionrulearray = (int)$val;
    }
}
