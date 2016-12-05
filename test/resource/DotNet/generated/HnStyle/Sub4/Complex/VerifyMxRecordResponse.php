<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class VerifyMxRecordResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $VerifyMXRecordResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws Exception
     */
    public function setVerifyMXRecordResult($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->VerifyMXRecordResult = ()$val;
    }
}
