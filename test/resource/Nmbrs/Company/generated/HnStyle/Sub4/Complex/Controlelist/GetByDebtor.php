<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Controlelist;

class GetByDebtor
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
