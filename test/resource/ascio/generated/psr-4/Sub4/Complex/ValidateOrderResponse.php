<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class ValidateOrderResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $ValidateOrderResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws Exception
     */
    public function setValidateOrderResult($val)
    {
        $this->ValidateOrderResult = (Response)$val;
    }
}
