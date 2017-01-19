<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Service;

class Insert2
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $EmployeeId;
    /**
     * @var dateTime
     */
    public $Start;
    /**
     * @var dateTime
     */
    public $Ancienniteitsdatum;
    /**
     * @var boolean
     */
    public $UnprotectedMode;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setEmployeeId($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->EmployeeId = $val;
    }

    /**
     * @param dateTime $val
     * @throws \Exception
     */
    public function setStart($val)
    {
        $this->Start = $val;
    }

    /**
     * @param dateTime $val
     * @throws \Exception
     */
    public function setAncienniteitsdatum($val)
    {
        $this->Ancienniteitsdatum = $val;
    }

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setUnprotectedMode($val)
    {
        $this->UnprotectedMode = $val;
    }
}
