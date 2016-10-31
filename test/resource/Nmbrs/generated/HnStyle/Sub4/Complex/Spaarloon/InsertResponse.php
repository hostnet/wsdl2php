<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Spaarloon;

class InsertResponse
{
    /**
     * @var int
     */
    public $spaarloon_insertresult;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setSpaarloonInsertResult($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->spaarloon_insertresult = (int)$val;
    }
}
