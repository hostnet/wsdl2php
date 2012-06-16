<?php

namespace Controle\sub1\sub2;
/**
 * SummaryEventScheduleType
 * Details about a summary event schedule.
 */
class SummaryEventScheduleType {
	/**
	 * @var \Controle\sub1\sub2\NotificationEventTypeCodeType | 	 */
	public $EventType;
	/**
	 * @var \Controle\sub1\sub2\SummaryWindowPeriodCodeType | The period of time for which to create a summary.
	 */
	public $SummaryPeriod;
	/**
	 * @var \Controle\sub1\sub2\SummaryFrequencyCodeType | How often the summary is to be delivered.
	 */
	public $Frequency;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

