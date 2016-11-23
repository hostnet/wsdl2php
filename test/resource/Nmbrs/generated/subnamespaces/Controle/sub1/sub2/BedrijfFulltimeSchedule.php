<?php

namespace Controle\sub1\sub2;

class BedrijfFulltimeSchedule
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\FulltimeSchedule
	 */
	public $FulltimeScheduleOne;
	/**
	 * @var \Controle\sub1\sub2\FulltimeSchedule
	 */
	public $FulltimeScheduleTwo;
	// @codingStandardsIgnoreEnd

	/**
	 * @param FulltimeSchedule $val
	 * @throws Exception
	 */
	public function setFulltimeScheduleOne($val)
	{
        $this->FulltimeScheduleOne = (int)$val;
	}

	/**
	 * @param FulltimeSchedule $val
	 * @throws Exception
	 */
	public function setFulltimeScheduleTwo($val)
	{
        $this->FulltimeScheduleTwo = (int)$val;
	}
}
