<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Spaarloon;

class GetResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Spaarloon
     */
    public $spaarloon_getresult;
    /**
     * @param Spaarloon $val
     * @throws Exception
     */
    public function setSpaarloonGetResult($val)
    {
        $this->spaarloon_getresult = (int)$val;
    }
}
