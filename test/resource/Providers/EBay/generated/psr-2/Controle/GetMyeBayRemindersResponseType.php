<?php

namespace Controle;

/**
 * GetMyeBayRemindersResponseType
 * Returns totals of various reminder types from the user's My eBay account.
 */
class GetMyeBayRemindersResponseType extends
 \Controle\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\RemindersType | Contains the buying reminders in the user's My eBay account that match the request criteria.
     */
    public $BuyingReminders;
    /**
     * @var \Controle\RemindersType | Contains the selling reminders in the user's My eBay account that match the request
     * criteria.
     */
    public $SellingReminders;
    // @codingStandardsIgnoreEnd

    /**
     * @param RemindersType $val
     * @throws Exception
     */
    public function setBuyingReminders($val)
    {
        $this->BuyingReminders = (int)$val;
    }

    /**
     * @param RemindersType $val
     * @throws Exception
     */
    public function setSellingReminders($val)
    {
        $this->SellingReminders = (int)$val;
    }
}
