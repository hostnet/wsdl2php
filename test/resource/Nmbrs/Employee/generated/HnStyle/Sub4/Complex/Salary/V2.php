<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Salary;

class V2
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $ID;
    /**
     * @var decimal
     */
    public $Value;
    /**
     * @var int
     */
    public $Type;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SalaryTableEmployee
     */
    public $SalaryTable;
    /**
     * @var dateTime
     */
    public $StartDate;
    /**
     * @var dateTime
     */
    public $CreationDate;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setID($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->ID = $val;
    }

    /**
     * @param decimal $val
     * @throws \Exception
     */
    public function setValue($val)
    {
        $this->Value = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setType($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Type = $val;
    }

    /**
     * @param SalaryTableEmployee $val
     * @throws \Exception
     */
    public function setSalaryTable($val)
    {
        $this->SalaryTable = $val;
    }

    /**
     * @param dateTime $val
     * @throws \Exception
     */
    public function setStartDate($val)
    {
        $this->StartDate = $val;
    }

    /**
     * @param dateTime $val
     * @throws \Exception
     */
    public function setCreationDate($val)
    {
        $this->CreationDate = $val;
    }
}
