<?php

namespace Controle;

class ValidateOrderResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Response
     */
    public $ValidateOrderResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws Exception
     */
    public function setValidateOrderResult($val)
    {
        $this->ValidateOrderResult = (int)$val;
    }
}
