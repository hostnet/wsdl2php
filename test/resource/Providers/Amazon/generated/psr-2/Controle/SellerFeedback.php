<?php

namespace Controle;

class SellerFeedback
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\FeedbackArray
     */
    public $Feedback;
    // @codingStandardsIgnoreEnd

    /**
     * @param FeedbackArray $val
     * @throws Exception
     */
    public function setFeedback($val)
    {
        $this->Feedback = (int)$val;
    }
}
