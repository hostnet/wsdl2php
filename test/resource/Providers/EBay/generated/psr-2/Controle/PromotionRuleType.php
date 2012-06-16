<?php

namespace Controle;
/**
 * PromotionRuleType
 * Defines a rule that promotes items or a store category when  a buyer views a specific item
 * or store category.
 */
class PromotionRuleType {
    /**
     * @var \Controle\PromotedItemType | The unique item ID of the cross-promoted item. Use for an ItemToItem rule.
     */
    public $PromotedItem;
    /**
     * @var \Controle\SiteCodeType |      */
    public $SiteID;
    /**
     * @var int | The ID of the Store category being promoted. Use with a promotion scheme of ItemToStoreCat,
     * StoreToStoreCat, ItemToDefaultRule, or DefaultRule. Only for Store owners.
     */
    public $PromotedStoreCategoryID;
    /**
     * @var string | The ID of the eBay category being promoted. Use with a promotion scheme of ItemToDefaultRule
     * or DefaultRule.
     */
    public $PromotedeBayCategoryID;
    /**
     * @var string | The keywords that identify promoted items. Use with a promotion scheme of ItemToDefaultRule
     * or DefaultRule. Only for Store owners.
     */
    public $PromotedKeywords;
    /**
     * @var \Controle\ItemIDType | The unique ID of the item the buyer is viewing or purchasing. Use with a promotion scheme
     * of ItemToItem or ItemToStoreCat. Always use ReferringItemID or ReferringStoreCategoryID,
     * but not both.
     */
    public $ReferringItemID;
    /**
     * @var int | The ID of the store category the user is browsing. Use with a promotion scheme of StoreToStoreCat,
     * ItemToDefaultRule or DefaultRule. Always use ReferringStoreCategoryID or ReferringItemID,
     * but not both.
     */
    public $ReferringStoreCategoryID;
    /**
     * @var string | The ID of the eBay category being referred. Use with a promotion scheme or ItemToDefaultRule
     * or DefaultRule.
     */
    public $ReferringeBayCategoryID;
    /**
     * @var string | The keywords that identify referring items. Use with a promotion scheme of ItemToDefaultRule
     * or DefaultRule. Only for Store owners.
     */
    public $ReferringKeywords;
    /**
     * @var \Controle\PromotionSchemeCodeType | The type of cross-promotion scheme you are defining.
     */
    public $PromotionScheme;
    /**
     * @var \Controle\PromotionMethodCodeType | The type of cross promotion, CrossSell or UpSell.
     */
    public $PromotionMethod;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}

