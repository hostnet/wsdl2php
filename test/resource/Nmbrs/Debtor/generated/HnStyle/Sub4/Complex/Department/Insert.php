<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Department;

class Insert
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $DebtorId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Department
     */
    public $department;
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
     * @param Department $val
     * @throws \Exception
     */
    public function setDepartment($val)
    {
        $this->department = $val;
    }
}
