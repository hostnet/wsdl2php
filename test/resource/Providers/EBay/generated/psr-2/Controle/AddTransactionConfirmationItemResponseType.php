<?php

namespace Controle;

/**
 * AddTransactionConfirmationItemResponseType
 * Returns an item ID for a new Transaction Confirmation Request (TCR).
 */
class AddTransactionConfirmationItemResponseType extends
 \Controle\AbstractResponseType
{
    /**
     * @var \Controle\ItemIDType | The item ID of the item reported for infringment.
     */
    public $itemid;
    /**
     * @var dateTime | Date and time (in GMT) that a Want It Now post was added.
     */
    public $starttime;
    /**
     * @var dateTime | Time stamp (in GMT) when the listing is scheduled to end (calculated based on the values
     * of StartTime and ListingDuration) or the actual end time if the item has ended.
     */
    public $endtime;
    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        $this->itemid = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setStartTime($val)
    {
        $this->starttime = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setEndTime($val)
    {
        $this->endtime = (int)$val;
    }
}
