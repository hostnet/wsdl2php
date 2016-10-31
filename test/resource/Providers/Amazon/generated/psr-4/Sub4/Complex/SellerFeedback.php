<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SellerFeedback
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\FeedbackArray
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
