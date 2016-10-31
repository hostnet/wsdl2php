<?php

namespace Controle;

class ValidateOrderResponse
{
    /**
     * @var \Controle\Response
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
