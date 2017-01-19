<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\SalaryTable;

class GetSteps
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $CompanyId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SalaryTableScale
     */
    public $Scale;
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
    public function setCompanyId($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = $val;
    }

    /**
     * @param SalaryTableScale $val
     * @throws \Exception
     */
    public function setScale($val)
    {
        $this->Scale = $val;
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
