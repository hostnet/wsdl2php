<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Title;

class Insert
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $DebtorId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Title
     */
    public $title;
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
     * @param Title $val
     * @throws \Exception
     */
    public function setTitle($val)
    {
        $this->title = $val;
    }
}
