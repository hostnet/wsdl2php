<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Contract\Insert;

class V2Response
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $Contract_Insert_v2Result;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setContractInsertv2Result($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Contract_Insert_v2Result = $val;
    }
}
