<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Contract\GetAll;

class V2Response
{
    // @codingStandardsIgnoreStart
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Contract\v2
     */
    public $Contract_GetAll_v2Result;
    // @codingStandardsIgnoreEnd

    /**
     * @param ArrayOfContract_v2 $val
     * @throws \Exception
     */
    public function setContractGetAllv2Result($val)
    {
        $this->Contract_GetAll_v2Result = $val;
    }
}
