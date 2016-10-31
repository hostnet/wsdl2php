<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class AbsenceVerzuim
{
    /**
     * @var int
     */
    public $debtorid;
    /**
     * @var int
     */
    public $comapnyid;
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @var string
     */
    public $xml;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setDebtorID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->debtorid = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setComapnyID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->comapnyid = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setEmployeeID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->employeeid = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setXML($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for XML');
        }
        $this->xml = (int)$val;
    }
}
