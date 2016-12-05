<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * RespondToWantItNowPostRequestType
 * Enables a seller to respond to a Want It Now post with an item listed on the eBay site.
 * Responses appear on the Want It Now post page, with the item title, the price of the item,
 * the number of bids on the item, and the time left before the listing ends. If the item has
 * a picture, the picture is also included on the Want It Now post page.
 */
class RespondToWantItNowPostRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $ItemID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | ID that uniquely identifies a Want It Now post.
     */
    public $PostID;
    // @codingStandardsIgnoreEnd

    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        $this->ItemID = (ItemIDType)$val;
    }

    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setPostID($val)
    {
        $this->PostID = (ItemIDType)$val;
    }
}
