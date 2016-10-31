<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed;

class InsertResponse
{
    /**
     * @var int
     */
    public $hourcomponentfixed_insertresult;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setHourComponentFixedInsertResult($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->hourcomponentfixed_insertresult = (int)$val;
    }
}
