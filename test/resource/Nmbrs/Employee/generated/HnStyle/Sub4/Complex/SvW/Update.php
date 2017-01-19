<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\SvW;

class Update
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $EmployeeId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SVWSettings
     */
    public $SVWSettings;
    /**
     * @var int
     */
    public $Period;
    /**
     * @var int
     */
    public $Year;
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
     * @param SVWSettings $val
     * @throws \Exception
     */
    public function setSVWSettings($val)
    {
        $this->SVWSettings = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setPeriod($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Period = $val;
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
}
