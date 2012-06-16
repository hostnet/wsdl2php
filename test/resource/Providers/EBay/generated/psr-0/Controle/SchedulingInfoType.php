<?php

namespace Controle;
/**
 * SchedulingInfoType
 * Contains information for scheduling limits for the user.
 */
class SchedulingInfoType {
	/**
	 * @var int | Maximum number of minutes that a listing may be scheduled in advance of its going live.
	 *            Output only.
	 */
	public $MaxScheduledMinutes;
	/**
	 * @var int | Minimum number of minutes that a listing may be scheduled in advance of its going live.
	 *            Output only.
	 */
	public $MinScheduledMinutes;
	/**
	 * @var int | Maximum number of Items that a user may schedule.            Output only.
	 */
	public $MaxScheduledItems;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
}

