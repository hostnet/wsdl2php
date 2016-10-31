<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class DoRegistrantVerificationResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
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
