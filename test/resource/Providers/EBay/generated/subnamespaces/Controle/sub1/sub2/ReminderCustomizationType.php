<?php

namespace Controle\sub1\sub2;
/**
 * ReminderCustomizationType
 * Specifies how to return certain reminder types from the user's My eBay account.
 */
class ReminderCustomizationType {
	/**
	 * @var int | The length of time the reminder has existed in the user's My eBay account, in days. Valid
	 * values are 1-60.
	 */
	public $DurationInDays;
	/**
	 * @var boolean | Whether to include information about this type of reminder in the response. When true,
	 * the container is returned with default input parameters.
	 */
	public $Include;
}

