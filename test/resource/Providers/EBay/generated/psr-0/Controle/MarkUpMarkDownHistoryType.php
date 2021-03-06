<?php

namespace Controle;

/**
 * MarkUpMarkDownHistoryType
 * List of objects representing markup or markdown events for a given application and time
 * period. If no time period is specified in the request, the information for only one day
 * (24 hours before the time the call is made to the time the call is made) is included. The
 * maximum time period is allowed is 3 days (72 hours before the call is made to the time the
 * call is made).
 */
class MarkUpMarkDownHistoryType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\MarkUpMarkDownEventType | Details for a MarkDown or MarkUp event.
	 */
	public $MarkUpMarkDownEvent;
	// @codingStandardsIgnoreEnd

	/**
	 * @param MarkUpMarkDownEventType $val
	 * @throws \Exception
	 */
	public function setMarkUpMarkDownEvent($val)
	{
        $this->MarkUpMarkDownEvent = $val;
	}
}
