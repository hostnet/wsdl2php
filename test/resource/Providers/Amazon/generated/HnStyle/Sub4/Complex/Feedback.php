<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class Feedback
{
    /**
     * @var string
     */
    public $feedbackrating;
    /**
     * @var string
     */
    public $feedbackcomments;
    /**
     * @var string
     */
    public $feedbackdate;
    /**
     * @var string
     */
    public $feedbackrater;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setFeedbackRating($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for FeedbackRating');
        }
        $this->feedbackrating = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setFeedbackComments($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for FeedbackComments');
        }
        $this->feedbackcomments = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setFeedbackDate($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for FeedbackDate');
        }
        $this->feedbackdate = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setFeedbackRater($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for FeedbackRater');
        }
        $this->feedbackrater = (int)$val;
    }
}
