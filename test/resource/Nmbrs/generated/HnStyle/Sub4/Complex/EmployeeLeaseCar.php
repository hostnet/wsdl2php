<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class EmployeeLeaseCar
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $licenseplate;
    /**
     * @var decimal
     */
    public $catalogvalue;
    /**
     * @var dateTime
     */
    public $startdate;
    /**
     * @var int
     */
    public $reasonnocontribution;
    /**
     * @var int
     */
    public $contributionprivatepercentage;
    /**
     * @var decimal
     */
    public $contributionprivateuse;
    /**
     * @var decimal
     */
    public $contributionnotdeductible;
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
     * @param string $val
     * @throws Exception
     */
    public function setLicensePlate($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for LicensePlate');
        }
        $this->licenseplate = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setCatalogValue($val)
    {
        $this->catalogvalue = (int)$val;
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
     * @param int $val
     * @throws Exception
     */
    public function setReasonNoContribution($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->reasonnocontribution = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setContributionPrivatePercentage($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->contributionprivatepercentage = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setContributionPrivateUse($val)
    {
        $this->contributionprivateuse = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setContributionNotDeductible($val)
    {
        $this->contributionnotdeductible = (int)$val;
    }
}
