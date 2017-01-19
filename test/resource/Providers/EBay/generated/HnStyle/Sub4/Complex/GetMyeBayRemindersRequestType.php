<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetMyeBayRemindersRequestType
 * Requests reminder type totals from the user's MyeBay account.
 */
class GetMyeBayRemindersRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ReminderCustomizationType | Contains the buying reminders in the user's My eBay account that match the request criteria.
     */
    public $BuyingReminders;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ReminderCustomizationType | Contains the selling reminders in the user's My eBay account that match the request
     * criteria.
     */
    public $SellingReminders;
    // @codingStandardsIgnoreEnd

    /**
     * @param ReminderCustomizationType $val
     * @throws \Exception
     */
    public function setBuyingReminders($val)
    {
        $this->BuyingReminders = $val;
    }

    /**
     * @param ReminderCustomizationType $val
     * @throws \Exception
     */
    public function setSellingReminders($val)
    {
        $this->SellingReminders = $val;
    }
}
