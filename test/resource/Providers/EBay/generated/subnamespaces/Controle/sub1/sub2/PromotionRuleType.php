<?php

namespace Controle\sub1\sub2;

/**
 * PromotionRuleType
 * Defines a rule that promotes items or a store category when  a buyer views a specific item
 * or store category.
 */
class PromotionRuleType
{
	/**
	 * @var \Controle\sub1\sub2\PromotedItemType | The unique item ID of the cross-promoted item. Use for an ItemToItem rule.
	 */
	public $promoteditem;
	/**
	 * @var \Controle\sub1\sub2\SiteCodeType | 	 */
	public $siteid;
	/**
	 * @var int | The ID of the Store category being promoted. Use with a promotion scheme of ItemToStoreCat,
	 * StoreToStoreCat, ItemToDefaultRule, or DefaultRule. Only for Store owners.
	 */
	public $promotedstorecategoryid;
	/**
	 * @var string | The ID of the eBay category being promoted. Use with a promotion scheme of ItemToDefaultRule
	 * or DefaultRule.
	 */
	public $promotedebaycategoryid;
	/**
	 * @var string | The keywords that identify promoted items. Use with a promotion scheme of ItemToDefaultRule
	 * or DefaultRule. Only for Store owners.
	 */
	public $promotedkeywords;
	/**
	 * @var \Controle\sub1\sub2\ItemIDType | The unique ID of the item the buyer is viewing or purchasing. Use with a promotion scheme
	 * of ItemToItem or ItemToStoreCat. Always use ReferringItemID or ReferringStoreCategoryID,
	 * but not both.
	 */
	public $referringitemid;
	/**
	 * @var int | The ID of the store category the user is browsing. Use with a promotion scheme of StoreToStoreCat,
	 * ItemToDefaultRule or DefaultRule. Always use ReferringStoreCategoryID or ReferringItemID,
	 * but not both.
	 */
	public $referringstorecategoryid;
	/**
	 * @var string | The ID of the eBay category being referred. Use with a promotion scheme or ItemToDefaultRule
	 * or DefaultRule.
	 */
	public $referringebaycategoryid;
	/**
	 * @var string | The keywords that identify referring items. Use with a promotion scheme of ItemToDefaultRule
	 * or DefaultRule. Only for Store owners.
	 */
	public $referringkeywords;
	/**
	 * @var \Controle\sub1\sub2\PromotionSchemeCodeType | The type of cross-promotion scheme you are defining.
	 */
	public $promotionscheme;
	/**
	 * @var \Controle\sub1\sub2\PromotionMethodCodeType | The type of cross promotion, CrossSell or UpSell.
	 */
	public $promotionmethod;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param PromotedItemType $val
	 * @throws Exception
	 */
	public function setPromotedItem($val)
	{
        $this->promoteditem = (int)$val;
	}

	/**
	 * @param SiteCodeType $val
	 * @throws Exception
	 */
	public function setSiteID($val)
	{
        $this->siteid = (int)$val;
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
        $this->promotedstorecategoryid = (int)$val;
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
        $this->promotedebaycategoryid = (int)$val;
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
        $this->promotedkeywords = (int)$val;
	}

	/**
	 * @param ItemIDType $val
	 * @throws Exception
	 */
	public function setReferringItemID($val)
	{
        $this->referringitemid = (int)$val;
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
        $this->referringstorecategoryid = (int)$val;
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
        $this->referringebaycategoryid = (int)$val;
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
        $this->referringkeywords = (int)$val;
	}

	/**
	 * @param PromotionSchemeCodeType $val
	 * @throws Exception
	 */
	public function setPromotionScheme($val)
	{
        $this->promotionscheme = (int)$val;
	}

	/**
	 * @param PromotionMethodCodeType $val
	 * @throws Exception
	 */
	public function setPromotionMethod($val)
	{
        $this->promotionmethod = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (int)$val;
	}
}
