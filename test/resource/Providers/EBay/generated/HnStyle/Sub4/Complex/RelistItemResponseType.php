<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * RelistItemResponseType
 * Returns the item ID and the estimated fees for the re-listed listing.
 */
class RelistItemResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $ItemID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\FeesType | (Not used.)
     */
    public $Fees;
    /**
     * @var dateTime | Date and time (in GMT) that a Want It Now post was added.
     */
    public $StartTime;
    /**
     * @var dateTime | Time stamp (in GMT) when the listing is scheduled to end (calculated based on the values
     * of StartTime and ListingDuration) or the actual end time if the item has ended.
     */
    public $EndTime;
    /**
     * @var string | ID of the category in which the Want It Now post is listed.
     */
    public $CategoryID;
    /**
     * @var string | ID of the secondary category in which the item would be listed. Only returned if you
     * set Item.CategoryMappingAllowed to true in the request and the ID you passed in SecondaryCategory
     * was mapped to a new ID by eBay. If the secondary category has not changed or it has
     * expired with no replacement, Category2ID does not return a value.
     */
    public $Category2ID;
    // @codingStandardsIgnoreEnd

    /**
     * @param ItemIDType $val
     * @throws \Exception
     */
    public function setItemID($val)
    {
        $this->ItemID = $val;
    }

    /**
     * @param FeesType $val
     * @throws \Exception
     */
    public function setFees($val)
    {
        $this->Fees = $val;
    }

    /**
     * @param dateTime $val
     * @throws \Exception
     */
    public function setStartTime($val)
    {
        $this->StartTime = $val;
    }

    /**
     * @param dateTime $val
     * @throws \Exception
     */
    public function setEndTime($val)
    {
        $this->EndTime = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setCategoryID($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for CategoryID');
        }
        $this->CategoryID = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setCategory2ID($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Category2ID');
        }
        $this->Category2ID = $val;
    }
}
