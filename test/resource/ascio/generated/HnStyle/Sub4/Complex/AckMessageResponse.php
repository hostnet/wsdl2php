<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class AckMessageResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $ackmessageresult;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setAckMessageResult($val)
    {
        $this->ackmessageresult = (int)$val;
    }
}
