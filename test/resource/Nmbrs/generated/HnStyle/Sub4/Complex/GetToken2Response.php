<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetToken2Response
{
    /**
     * @var string
     */
    public $gettoken2result;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setGetToken2Result($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for GetToken2Result');
        }
        $this->gettoken2result = (int)$val;
    }
}
