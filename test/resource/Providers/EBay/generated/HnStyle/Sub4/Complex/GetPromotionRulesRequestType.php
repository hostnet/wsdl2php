<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetPromotionRulesRequestType
 * Requests a list of the cross-promotion rules associated with a specific referring item or
 * store category.
 */
class GetPromotionRulesRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $itemid;
    /**
     * @var int | Numeric ID for a custom category that the seller created in their eBay Store, if any. eBay
     * Stores sellers can create up to three levels of custom categories for their stores. Items
     * can only be listed in store categories that have no child categories (subcategories). If
     * you attempt to list an item in a category that has subcategories, the call response
     * contains a warning, and the item is listed in the Other store category. In GetSearchResults,
     * this field currently returns 0. As a workaround, use GetItem or related calls to get
     * the ID.
     */
    public $storecategoryid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PromotionMethodCodeType | The type of cross promotion, CrossSell or UpSell.
     */
    public $promotionmethod;
    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        $this->itemid = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setStoreCategoryID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->storecategoryid = (int)$val;
    }

    /**
     * @param PromotionMethodCodeType $val
     * @throws Exception
     */
    public function setPromotionMethod($val)
    {
        $this->promotionmethod = (int)$val;
    }
}