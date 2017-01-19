<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * FeedbackDetailArrayType
 * Contains multiple individual feedback detail entries.
 */
class FeedbackDetailArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\FeedbackDetailType | Contains a single feedback detail entry. Output only.
     */
    public $FeedbackDetail;
    // @codingStandardsIgnoreEnd

    /**
     * @param FeedbackDetailType $val
     * @throws \Exception
     */
    public function setFeedbackDetail($val)
    {
        $this->FeedbackDetail = $val;
    }
}
