<?php

namespace Controle;

class AbsenceVerzuim
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $DebtorID;
    /**
     * @var int
     */
    public $ComapnyID;
    /**
     * @var int
     */
    public $EmployeeID;
    /**
     * @var string
     */
    public $XML;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setDebtorID($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->DebtorID = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setComapnyID($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->ComapnyID = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setEmployeeID($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->EmployeeID = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setXML($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for XML');
        }
        $this->XML = $val;
    }
}
