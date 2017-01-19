<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class AckMessageResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $AckMessageResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws \Exception
     */
    public function setAckMessageResult($val)
    {
        $this->AckMessageResult = $val;
    }
}
