<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetToken2Response
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $GetToken2Result;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setGetToken2Result($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for GetToken2Result');
        }
        $this->GetToken2Result = $val;
    }
}
