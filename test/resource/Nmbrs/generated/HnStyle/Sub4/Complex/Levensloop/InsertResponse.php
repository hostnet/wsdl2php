<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Levensloop;

class InsertResponse
{
    /**
     * @var int
     */
    public $levensloop_insertresult;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setLevensloopInsertResult($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->levensloop_insertresult = (int)$val;
    }
}
