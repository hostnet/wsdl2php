<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Contract;

class V3
{
    /**
     * @var int
     */
    public $contractid;
    /**
     * @var dateTime
     */
    public $creationdate;
    /**
     * @var dateTime
     */
    public $startdate;
    /**
     * @var dateTime
     */
    public $trialperiod;
    /**
     * @var dateTime
     */
    public $enddate;
    /**
     * @var int
     */
    public $employementtype;
    /**
     * @var int
     */
    public $contracttype;
    /**
     * @var int
     */
    public $employmentsequencetaxid;
    /**
     * @var boolean
     */
    public $indefinite;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setContractID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->contractid = (int)$val;
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
    public function setTrialPeriod($val)
    {
        $this->trialperiod = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setEndDate($val)
    {
        $this->enddate = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setEmployementType($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->employementtype = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setContractType($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->contracttype = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setEmploymentSequenceTaxId($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->employmentsequencetaxid = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setIndefinite($val)
    {
        $this->indefinite = (int)$val;
    }
}
