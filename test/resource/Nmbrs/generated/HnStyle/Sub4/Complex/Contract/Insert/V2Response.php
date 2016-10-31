<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Contract\Insert;

class V2Response
{
    /**
     * @var int
     */
    public $contract_insert_v2result;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setContractInsertv2Result($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->contract_insert_v2result = (int)$val;
    }
}
