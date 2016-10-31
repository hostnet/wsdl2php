<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction;

class InsertResponse
{
    /**
     * @var int
     */
    public $function_insertresult;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setFunctionInsertResult($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->function_insertresult = (int)$val;
    }
}
