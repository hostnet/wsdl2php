<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Salary;

class V2
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var decimal
     */
    public $value;
    /**
     * @var int
     */
    public $type;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SalaryTableEmployee
     */
    public $salarytable;
    /**
     * @var dateTime
     */
    public $startdate;
    /**
     * @var dateTime
     */
    public $creationdate;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->id = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setValue($val)
    {
        $this->value = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setType($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->type = (int)$val;
    }

    /**
     * @param SalaryTableEmployee $val
     * @throws Exception
     */
    public function setSalaryTable($val)
    {
        $this->salarytable = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setStartDate($val)
    {
        $this->startdate = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setCreationDate($val)
    {
        $this->creationdate = (int)$val;
    }
}
