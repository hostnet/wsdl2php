<?php

namespace Controle\sub1\sub2;

/**
 * SchedulingInfoType
 * Contains information for scheduling limits for the user.
 */
class SchedulingInfoType
{
	// @codingStandardsIgnoreStart
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
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setMaxScheduledMinutes($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->MaxScheduledMinutes = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setMinScheduledMinutes($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->MinScheduledMinutes = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setMaxScheduledItems($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->MaxScheduledItems = $val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws \Exception
	 */
	public function setAny($val)
	{
        $this->any = $val;
	}
}
