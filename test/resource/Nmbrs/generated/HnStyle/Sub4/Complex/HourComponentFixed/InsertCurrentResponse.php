<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed;

class InsertCurrentResponse
{
    /**
     * @var int
     */
    public $hourcomponentfixed_insertcurrentresult;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setHourComponentFixedInsertCurrentResult($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->hourcomponentfixed_insertcurrentresult = (int)$val;
    }
}
