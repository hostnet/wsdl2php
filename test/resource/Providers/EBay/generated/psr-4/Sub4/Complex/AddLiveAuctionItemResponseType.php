<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * AddLiveAuctionItemResponseType
 * Returns the item ID and the estimated fees for the new lot item listing, as well as the
 * state of the lot item (e.g., categories that changed).
 */
class AddLiveAuctionItemResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $itemid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\FeesType | (Not used.)
     */
    public $fees;
    /**
     * @var string | ID of the category in which the Want It Now post is listed.
     */
    public $categoryid;
    /**
     * @var string | ID of the secondary category in which the item would be listed. Only returned if you
     * set Item.CategoryMappingAllowed to true in the request and the ID you passed in SecondaryCategory
     * was mapped to a new ID by eBay. If the secondary category has not changed or it has
     * expired with no replacement, Category2ID does not return a value.
     */
    public $category2id;
    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        $this->itemid = (int)$val;
    }

    /**
     * @param FeesType $val
     * @throws Exception
     */
    public function setFees($val)
    {
        $this->fees = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCategoryID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CategoryID');
        }
        $this->categoryid = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCategory2ID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Category2ID');
        }
        $this->category2id = (int)$val;
    }
}