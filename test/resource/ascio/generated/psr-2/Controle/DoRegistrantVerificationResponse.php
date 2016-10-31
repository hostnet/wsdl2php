<?php

namespace Controle;

class DoRegistrantVerificationResponse
{
    /**
     * @var \Controle\Response
     */
    public $doregistrantverificationresult;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setDoRegistrantVerificationResult($val)
    {
        $this->doregistrantverificationresult = (int)$val;
    }
}
