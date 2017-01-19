<?php

namespace Controle;

/**
 * EndItemResponseType
 * Includes the acknowledgement of date and time the auction was ended due to the call to EndItem.
 */
class EndItemResponseType extends
 \Controle\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var dateTime | Time stamp (in GMT) when the listing is scheduled to end (calculated based on the values
     * of StartTime and ListingDuration) or the actual end time if the item has ended.
     */
    public $EndTime;
    // @codingStandardsIgnoreEnd

    /**
     * @param dateTime $val
     * @throws \Exception
     */
    public function setEndTime($val)
    {
        $this->EndTime = $val;
    }
}
