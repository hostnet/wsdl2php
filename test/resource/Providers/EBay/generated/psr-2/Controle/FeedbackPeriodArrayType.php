<?php

namespace Controle;
/**
 * FeedbackPeriodArrayType
 * Container for a set of feedback statistics. Contains zero one or multiple FeedbackPeriod
 * objects. Output only, for the summary feedback data returned by GetFeedback.
 */
class FeedbackPeriodArrayType {
    /**
     * @var \Controle\FeedbackPeriodType | Contains one feedback statistic giving length of the period being reported (e.g. last
     * 7 days prior to the call), and total number of feedback entries (of the type given by
     * the container, e.g. positive feedback) submitted during the indicated period. Returned
     * if no detail level is specified.
     */
    public $FeedbackPeriod;
}
