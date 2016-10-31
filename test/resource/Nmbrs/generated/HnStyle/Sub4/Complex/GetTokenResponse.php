<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetTokenResponse
{
    /**
     * @var string
     */
    public $gettokenresult;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setGetTokenResult($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for GetTokenResult');
        }
        $this->gettokenresult = (int)$val;
    }
}
