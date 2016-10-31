<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetCrossPromotionsRequestType
 * Retrieves a list of upsell or cross-sell items associated with the specifeid item ID. The
 * seller must be the owner of an eBay Stores storefront to cross-promote items.
 */
class GetCrossPromotionsRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $itemid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PromotionMethodCodeType | The type of cross promotion, CrossSell or UpSell.
     */
    public $promotionmethod;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\TradingRoleCodeType | The role of the person requesting to view the cross-promoted items, either seller or
     * buyer. Default is buyer.
     */
    public $promotionviewmode;
    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        $this->itemid = (int)$val;
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
     * @param TradingRoleCodeType $val
     * @throws Exception
     */
    public function setPromotionViewMode($val)
    {
        $this->promotionviewmode = (int)$val;
    }
}
