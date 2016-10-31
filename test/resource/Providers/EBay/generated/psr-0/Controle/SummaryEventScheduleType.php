<?php

namespace Controle;

/**
 * SummaryEventScheduleType
 * Details about a summary event schedule.
 */
class SummaryEventScheduleType
{
	/**
	 * @var \Controle\NotificationEventTypeCodeType | 	 */
	public $eventtype;
	/**
	 * @var \Controle\SummaryWindowPeriodCodeType | The period of time for which to create a summary.
	 */
	public $summaryperiod;
	/**
	 * @var \Controle\SummaryFrequencyCodeType | How often the summary is to be delivered.
	 */
	public $frequency;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param NotificationEventTypeCodeType $val
	 * @throws Exception
	 */
	public function setEventType($val)
	{
        $this->eventtype = (int)$val;
	}

	/**
	 * @param SummaryWindowPeriodCodeType $val
	 * @throws Exception
	 */
	public function setSummaryPeriod($val)
	{
        $this->summaryperiod = (int)$val;
	}

	/**
	 * @param SummaryFrequencyCodeType $val
	 * @throws Exception
	 */
	public function setFrequency($val)
	{
        $this->frequency = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (int)$val;
	}
}
