<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Contract\GetAll;

class V2Response
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Contract\v2
     */
    public $contract_getall_v2result;
    /**
     * @param ArrayOfContract_v2 $val
     * @throws Exception
     */
    public function setContractGetAllv2Result($val)
    {
        $this->contract_getall_v2result = (int)$val;
    }
}
