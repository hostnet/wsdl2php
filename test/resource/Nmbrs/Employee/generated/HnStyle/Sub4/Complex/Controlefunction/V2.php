<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction;

class V2
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $Id;
    /**
     * @var int
     */
    public $Code;
    /**
     * @var string
     */
    public $Description;
    /**
     * @var dateTime
     */
    public $CreationDate;
    /**
     * @var int
     */
    public $StartPeriod;
    /**
     * @var int
     */
    public $StartYear;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setId($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Id = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setCode($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Code = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setDescription($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Description');
        }
        $this->Description = $val;
    }

    /**
     * @param dateTime $val
     * @throws \Exception
     */
    public function setCreationDate($val)
    {
        $this->CreationDate = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setStartPeriod($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->StartPeriod = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setStartYear($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->StartYear = $val;
    }
}
