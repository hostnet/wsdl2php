<?php

namespace Controle\sub1\sub2;

/**
 * GetMyeBayRemindersResponseType
 * Returns totals of various reminder types from the user's My eBay account.
 */
class GetMyeBayRemindersResponseType extends
 \Controle\sub1\sub2\AbstractResponseType
{
	/**
	 * @var \Controle\sub1\sub2\RemindersType | Contains the buying reminders in the user's My eBay account that match the request criteria.
	 */
	public $buyingreminders;
	/**
	 * @var \Controle\sub1\sub2\RemindersType | Contains the selling reminders in the user's My eBay account that match the request criteria.
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
