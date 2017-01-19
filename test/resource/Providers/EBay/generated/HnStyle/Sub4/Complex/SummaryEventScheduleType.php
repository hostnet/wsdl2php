<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * SummaryEventScheduleType
 * Details about a summary event schedule.
 */
class SummaryEventScheduleType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\NotificationEventTypeCodeType |      */
    public $EventType;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SummaryWindowPeriodCodeType | The period of time for which to create a summary.
     */
    public $SummaryPeriod;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SummaryFrequencyCodeType | How often the summary is to be delivered.
     */
    public $Frequency;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param NotificationEventTypeCodeType $val
     * @throws \Exception
     */
    public function setEventType($val)
    {
        $this->EventType = $val;
    }

    /**
     * @param SummaryWindowPeriodCodeType $val
     * @throws \Exception
     */
    public function setSummaryPeriod($val)
    {
        $this->SummaryPeriod = $val;
    }

    /**
     * @param SummaryFrequencyCodeType $val
     * @throws \Exception
     */
    public function setFrequency($val)
    {
        $this->Frequency = $val;
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
