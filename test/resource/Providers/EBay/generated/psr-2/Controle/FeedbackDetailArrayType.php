<?php

namespace Controle;

/**
 * FeedbackDetailArrayType
 * Contains multiple individual feedback detail entries.
 */
class FeedbackDetailArrayType
{
    /**
     * @var \Controle\FeedbackDetailType | Contains a single feedback detail entry. Output only.
     */
    public $feedbackdetail;
    /**
     * @param FeedbackDetailType $val
     * @throws Exception
     */
    public function setFeedbackDetail($val)
    {
        $this->feedbackdetail = (int)$val;
    }
}
