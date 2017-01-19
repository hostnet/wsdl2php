<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Address;

class InsertCurrentResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $Address_InsertCurrentResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setAddressInsertCurrentResult($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Address_InsertCurrentResult = $val;
    }
}
