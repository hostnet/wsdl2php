<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * FeedbackPeriodType
 * Contains the data for one type of feedback for one predefined time period. Parent FeedbackPeriodArrayType
 * object indicates the type of feedback counted: positive, neutral, negative, or total. Output
 * only, in the summary feedback data returned by GetFeedback.
 */
class FeedbackPeriodType
{
    /**
     * @var int | Indicates the time period for the feedback count. Returns a value indicating the number
     * of days prior to the call for which feedbacks of the particular type are counted. Returned
     * if no detail level is specified.
     */
    public $periodindays;
    /**
     * @var int | Count of the feedbacks received by the user for the time period prior to the call indicated
     * in PeriodInDays. Returned if no detail level is specified.
     */
    public $count;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setPeriodInDays($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->periodindays = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->count = (int)$val;
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
