<?php

namespace Controle\sub1\sub2;

/**
 * GetMyeBayRemindersResponseType
 * Returns totals of various reminder types from the user's My eBay account.
 */
class GetMyeBayRemindersResponseType extends
 \Controle\sub1\sub2\AbstractResponseType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\RemindersType | Contains the buying reminders in the user's My eBay account that match the request criteria.
	 */
	public $BuyingReminders;
	/**
	 * @var \Controle\sub1\sub2\RemindersType | Contains the selling reminders in the user's My eBay account that match the request criteria.
	 */
	public $SellingReminders;
	// @codingStandardsIgnoreEnd

	/**
	 * @param RemindersType $val
	 * @throws \Exception
	 */
	public function setBuyingReminders($val)
	{
        $this->BuyingReminders = $val;
	}

	/**
	 * @param RemindersType $val
	 * @throws \Exception
	 */
	public function setSellingReminders($val)
	{
        $this->SellingReminders = $val;
	}
}
