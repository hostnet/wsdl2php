<?php

namespace Controle;

class RunInfo
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $ID;
    /**
     * @var int
     */
    public $Number;
    /**
     * @var int
     */
    public $Year;
    /**
     * @var int
     */
    public $PeriodStart;
    /**
     * @var int
     */
    public $PeriodEnd;
    /**
     * @var string
     */
    public $Description;
    /**
     * @var dateTime
     */
    public $RunAt;
    /**
     * @var boolean
     */
    public $IsLocked;
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
     * @param int $val
     * @throws \Exception
     */
    public function setNumber($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Number = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setYear($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Year = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setPeriodStart($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->PeriodStart = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setPeriodEnd($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->PeriodEnd = $val;
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
    public function setRunAt($val)
    {
        $this->RunAt = $val;
    }

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setIsLocked($val)
    {
        $this->IsLocked = $val;
    }
}
