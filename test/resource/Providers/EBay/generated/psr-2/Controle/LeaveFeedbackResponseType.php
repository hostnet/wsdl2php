<?php

namespace Controle;

/**
 * LeaveFeedbackResponseType
 * LeaveFeedback response message includes an acknowledgement if the          feedback was
 * successfully left.
 */
class LeaveFeedbackResponseType extends
 \Controle\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | Unique identifier for the feedback entry. Returned for a detail level of ReturnAll (if
     * the parent is returned).
     */
    public $FeedbackID;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setFeedbackID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for FeedbackID');
        }
        $this->FeedbackID = (int)$val;
    }
}
