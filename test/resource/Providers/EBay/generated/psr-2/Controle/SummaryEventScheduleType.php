<?php

namespace Controle;
/**
 * SummaryEventScheduleType
 * Details about a summary event schedule.
 */
class SummaryEventScheduleType {
    /**
     * @var \Controle\NotificationEventTypeCodeType |      */
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
}

