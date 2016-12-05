<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * PromotionRuleType
 * Defines a rule that promotes items or a store category when  a buyer views a specific item
 * or store category.
 */
class PromotionRuleType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PromotedItemType | The unique item ID of the cross-promoted item. Use for an ItemToItem rule.
     */
    public $PromotedItem;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SiteCodeType |      */
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
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The unique ID of the item the buyer is viewing or purchasing. Use with a promotion scheme
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
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PromotionSchemeCodeType | The type of cross-promotion scheme you are defining.
     */
    public $PromotionScheme;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PromotionMethodCodeType | The type of cross promotion, CrossSell or UpSell.
     */
    public $PromotionMethod;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param PromotedItemType $val
     * @throws Exception
     */
    public function setPromotedItem($val)
    {
        $this->PromotedItem = (PromotedItemType)$val;
    }

    /**
     * @param SiteCodeType $val
     * @throws Exception
     */
    public function setSiteID($val)
    {
        $this->SiteID = (SiteCodeType)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setPromotedStoreCategoryID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->PromotedStoreCategoryID = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setPromotedeBayCategoryID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for PromotedeBayCategoryID');
        }
        $this->PromotedeBayCategoryID = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setPromotedKeywords($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for PromotedKeywords');
        }
        $this->PromotedKeywords = (string)$val;
    }

    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setReferringItemID($val)
    {
        $this->ReferringItemID = (ItemIDType)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setReferringStoreCategoryID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->ReferringStoreCategoryID = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setReferringeBayCategoryID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ReferringeBayCategoryID');
        }
        $this->ReferringeBayCategoryID = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setReferringKeywords($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ReferringKeywords');
        }
        $this->ReferringKeywords = (string)$val;
    }

    /**
     * @param PromotionSchemeCodeType $val
     * @throws Exception
     */
    public function setPromotionScheme($val)
    {
        $this->PromotionScheme = (PromotionSchemeCodeType)$val;
    }

    /**
     * @param PromotionMethodCodeType $val
     * @throws Exception
     */
    public function setPromotionMethod($val)
    {
        $this->PromotionMethod = (PromotionMethodCodeType)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (<anyXML>)$val;
    }
}
