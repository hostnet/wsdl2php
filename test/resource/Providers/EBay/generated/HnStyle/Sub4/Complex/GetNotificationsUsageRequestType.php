<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetNotificationsUsageRequestType
 * Retrieves usage information about platform notifications for a given application. You can
 * use this notification information to troubleshoot issues with platform notifications. You
 * can call this up to 50 times per hour for a given application.
 */
class GetNotificationsUsageRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
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
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $ItemID;
    // @codingStandardsIgnoreEnd

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setStartTime($val)
    {
        $this->StartTime = (dateTime)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setEndTime($val)
    {
        $this->EndTime = (dateTime)$val;
    }

    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        $this->ItemID = (ItemIDType)$val;
    }
}
