<?php

namespace Controle\sub1\sub2;

/**
 * CrossPromotionsType
 * Contains one or more items cross-promoted with the display or purchase of a referring item.
 */
class CrossPromotionsType
{
	/**
	 * @var \Controle\sub1\sub2\ItemIDType | The item ID of the item reported for infringment.
	 */
	public $itemid;
	/**
	 * @var \Controle\sub1\sub2\PromotionSchemeCodeType | The primary cross-promotion rule scheme that was applied to return the cross-promoted item.
	 */
	public $primaryscheme;
	/**
	 * @var \Controle\sub1\sub2\PromotionMethodCodeType | The type of cross promotion, CrossSell or UpSell.
	 */
	public $promotionmethod;
	/**
	 * @var string | The eBay ID of the seller who listed the item. <br><br> Starting Jan 2007, when a bidder's
	 * user info is made anonymous, this tag will be returned with the anonymous value "Seller
	 * X", where X indicates where the seller falls in the sequence of sellers that the user has
	 * purchased items from. For example, if the seller is the third seller that the user has
	 * purchased items from, the value "Seller 3" is returned.
	 */
	public $sellerid;
	/**
	 * @var boolean | Whether a shipping discount is offered by the seller when the cross-promoted item is purchased.
	 */
	public $shippingdiscount;
	/**
	 * @var string | The key of the seller who is promoting the item.
	 */
	public $sellerkey;
	/**
	 * @var string | The name of the seller's eBay Store.
	 */
	public $storename;
	/**
	 * @var \Controle\sub1\sub2\PromotedItemType | The unique item ID of the cross-promoted item. Use for an ItemToItem rule.
	 */
	public $promoteditem;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param ItemIDType $val
	 * @throws Exception
	 */
	public function setItemID($val)
	{
        $this->itemid = (int)$val;
	}

	/**
	 * @param PromotionSchemeCodeType $val
	 * @throws Exception
	 */
	public function setPrimaryScheme($val)
	{
        $this->primaryscheme = (int)$val;
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
	 * @param string $val
	 * @throws Exception
	 */
	public function setSellerID($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SellerID');
        }
        $this->sellerid = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setShippingDiscount($val)
	{
        $this->shippingdiscount = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSellerKey($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SellerKey');
        }
        $this->sellerkey = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setStoreName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for StoreName');
        }
        $this->storename = (int)$val;
	}

	/**
	 * @param PromotedItemType $val
	 * @throws Exception
	 */
	public function setPromotedItem($val)
	{
        $this->promoteditem = (int)$val;
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
