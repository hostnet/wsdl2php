<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction;

class Update
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $DebtorId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Function
     */
    public $function;
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

    /**
     * @param Function $val
     * @throws \Exception
     */
    public function setFunction($val)
    {
        $this->function = $val;
    }
}
