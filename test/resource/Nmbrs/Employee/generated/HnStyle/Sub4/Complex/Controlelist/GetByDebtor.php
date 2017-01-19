<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Controlelist;

class GetByDebtor
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $DebtorId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Active
     */
    public $active;
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
     * @param Active $val
     * @throws \Exception
     */
    public function setActive($val)
    {
        $this->active = $val;
    }
}
