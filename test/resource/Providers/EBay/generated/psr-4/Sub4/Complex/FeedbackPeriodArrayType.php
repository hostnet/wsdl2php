<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * FeedbackPeriodArrayType
 * Container for a set of feedback statistics. Contains zero one or multiple FeedbackPeriod
 * objects. Output only, for the summary feedback data returned by GetFeedback.
 */
class FeedbackPeriodArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\FeedbackPeriodType | Contains one feedback statistic giving length of the period being reported (e.g. last
     * 7 days prior to the call), and total number of feedback entries (of the type given by
     * the container, e.g. positive feedback) submitted during the indicated period. Returned
     * if no detail level is specified.
     */
    public $FeedbackPeriod;
    // @codingStandardsIgnoreEnd

    /**
     * @param FeedbackPeriodType $val
     * @throws Exception
     */
    public function setFeedbackPeriod($val)
    {
        $this->FeedbackPeriod = (int)$val;
    }
}
