<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Title;

class GetList
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $DebtorId;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setDebtorId($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->DebtorId = $val;
    }
}
