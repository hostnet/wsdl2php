<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Spaarloon;

class InsertResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $Spaarloon_InsertResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setSpaarloonInsertResult($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Spaarloon_InsertResult = $val;
    }
}
