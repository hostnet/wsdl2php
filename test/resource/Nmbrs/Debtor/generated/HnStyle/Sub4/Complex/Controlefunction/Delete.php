<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction;

class Delete
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $DebtorId;
    /**
     * @var int
     */
    public $id;
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
     * @param int $val
     * @throws \Exception
     */
    public function setId($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->id = $val;
    }
}
