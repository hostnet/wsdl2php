<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class ValidateOrderResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $validateorderresult;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setValidateOrderResult($val)
    {
        $this->validateorderresult = (int)$val;
    }
}
