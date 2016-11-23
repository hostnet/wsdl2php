<?php

namespace Controle;

/**
 * SummaryEventScheduleType
 * Details about a summary event schedule.
 */
class SummaryEventScheduleType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\NotificationEventTypeCodeType | 	 */
	public $EventType;
	/**
	 * @var \Controle\SummaryWindowPeriodCodeType | The period of time for which to create a summary.
	 */
	public $SummaryPeriod;
	/**
	 * @var \Controle\SummaryFrequencyCodeType | How often the summary is to be delivered.
	 */
	public $Frequency;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param NotificationEventTypeCodeType $val
	 * @throws Exception
	 */
	public function setEventType($val)
	{
        $this->EventType = (int)$val;
	}

	/**
	 * @param SummaryWindowPeriodCodeType $val
	 * @throws Exception
	 */
	public function setSummaryPeriod($val)
	{
        $this->SummaryPeriod = (int)$val;
	}

	/**
	 * @param SummaryFrequencyCodeType $val
	 * @throws Exception
	 */
	public function setFrequency($val)
	{
        $this->Frequency = (int)$val;
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
