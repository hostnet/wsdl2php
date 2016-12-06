<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetItemRequestType
 * Requests data for a specific item identified by item ID. Use no DetailLevel to return all
 * item fields without Item.Description. Use a DetailLevel of ReturnAll to return all item
 * fields. See GetItem in the eBay Web Services Guide for more information. <p>Applicable to
 * the <a href="http://developer.ebay.com/developercenter/rest/" target="_blank">REST API</a>.</p>
 */
class GetItemRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $ItemID;
    /**
     * @var boolean | Indicates if the response should include detailed data relating to whether an item would
     * qualify as an Express listing. For information about the Express-related data that can
     * be returned when IncludeExpressRequirements is set to true, see the annotations for
     * the output of VerifyAddItem and see the eBay Web Services Guide.
     */
    public $IncludeExpressRequirements;
    /**
     * @var boolean | Specifies whether to include WatchCount in Item nodes returned. WatchCount is only returned
     * with DetailLevel ReturnAll.
     */
    public $IncludeWatchCount;
    /**
     * @var boolean | Specifies whether or not to to include cross-promotion information for the item in the
     * call response. <br><br> With a request version of 485 or higher, the default is false
     * (do not include cross-promotion details). Set to true to retrieve cross-promotion information
     * for the item. Cross-promotion information is returned in Item.CrossPromotion.PromotedItem.PromotionDetails.
     * A promoted item will now contain multiple PromotionDetails containers. <br><br> With
     * a request version lower than 485, the default is true (include cross-promotions). Set
     * the value to false if you do not want to retrieve cross-promotion information. Cross-promotion
     * information, PromotedPrice and PromotedPriceType, are returned in Item.CrossPromotion.PromotedItem.
     * If a promoted item has multiple PromotedPriceType and PromotedPrice value pairs, only
     * the last pair is returned.
     */
    public $IncludeCrossPromotion;
    // @codingStandardsIgnoreEnd

    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        $this->ItemID = $val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setIncludeExpressRequirements($val)
    {
        $this->IncludeExpressRequirements = $val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setIncludeWatchCount($val)
    {
        $this->IncludeWatchCount = $val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setIncludeCrossPromotion($val)
    {
        $this->IncludeCrossPromotion = $val;
    }
}
