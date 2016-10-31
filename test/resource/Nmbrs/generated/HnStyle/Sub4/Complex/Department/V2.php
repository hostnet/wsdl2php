<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Department;

class V2
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $code;
    /**
     * @var string
     */
    public $description;
    /**
     * @var dateTime
     */
    public $creationdate;
    /**
     * @var int
     */
    public $startperiod;
    /**
     * @var int
     */
    public $startyear;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setId($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->id = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setCode($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->code = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setDescription($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Description');
        }
        $this->description = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setCreationDate($val)
    {
        $this->creationdate = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setStartPeriod($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->startperiod = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setStartYear($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->startyear = (int)$val;
    }
}
