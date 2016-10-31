<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class VerifyMxRecordResponse
{
    /**
     * @var int
     */
    public $verifymxrecordresult;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setVerifyMXRecordResult($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->verifymxrecordresult = (int)$val;
    }
}
