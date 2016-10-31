<?php

namespace Controle;
/**
 * FeedbackDetailArrayType
 * Contains multiple individual feedback detail entries.
 */
class FeedbackDetailArrayType {
    /**
     * @var \Controle\FeedbackDetailType | Contains a single feedback detail entry. Output only.
     */
    public $FeedbackDetail;
    /**
     * @param FeedbackDetailType $val
     * @throws Exception
     */
    public function setFeedbackDetail($val) {
        
        $this->FeedbackDetail = (int)$val;
    }

}

