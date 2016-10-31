<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetMyeBayRemindersResponseType
 * Returns totals of various reminder types from the user's My eBay account.
 */
class GetMyeBayRemindersResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\RemindersType | Contains the buying reminders in the user's My eBay account that match the request criteria.
     */
    public $buyingreminders;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\RemindersType | Contains the selling reminders in the user's My eBay account that match the request
     * criteria.
     */
    public $sellingreminders;
    /**
     * @param RemindersType $val
     * @throws Exception
     */
    public function setBuyingReminders($val)
    {
        $this->buyingreminders = (int)$val;
    }

    /**
     * @param RemindersType $val
     * @throws Exception
     */
    public function setSellingReminders($val)
    {
        $this->sellingreminders = (int)$val;
    }
}
