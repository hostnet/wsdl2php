<?php

namespace Controle;

class SellerFeedback
{
    /**
     * @var \Controle\FeedbackArray
     */
    public $feedback;
    /**
     * @param FeedbackArray $val
     * @throws Exception
     */
    public function setFeedback($val)
    {
        $this->feedback = (int)$val;
    }
}
