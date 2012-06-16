<?php

namespace Controle;
/**
 * GetMyeBayRemindersResponseType
 * Returns totals of various reminder types from the user's My eBay account.
 */
class GetMyeBayRemindersResponseType extends \Controle\AbstractResponseType {
    /**
     * @var \Controle\RemindersType | Contains the buying reminders in the user's My eBay account that match the request criteria.
     */
    public $BuyingReminders;
    /**
     * @var \Controle\RemindersType | Contains the selling reminders in the user's My eBay account that match the request
     * criteria.
     */
    public $SellingReminders;
}

