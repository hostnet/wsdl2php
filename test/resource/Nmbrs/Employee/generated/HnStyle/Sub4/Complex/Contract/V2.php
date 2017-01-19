<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Contract;

class V2
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $ContractID;
    /**
     * @var dateTime
     */
    public $StartDate;
    /**
     * @var dateTime
     */
    public $TrialPeriod;
    /**
     * @var dateTime
     */
    public $EndDate;
    /**
     * @var int
     */
    public $EmployementType;
    /**
     * @var int
     */
    public $ContractType;
    /**
     * @var int
     */
    public $EmploymentSequenceTaxId;
    /**
     * @var boolean
     */
    public $Indefinite;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setContractID($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->ContractID = $val;
    }

    /**
     * @param dateTime $val
     * @throws \Exception
     */
    public function setStartDate($val)
    {
        $this->StartDate = $val;
    }

    /**
     * @param dateTime $val
     * @throws \Exception
     */
    public function setTrialPeriod($val)
    {
        $this->TrialPeriod = $val;
    }

    /**
     * @param dateTime $val
     * @throws \Exception
     */
    public function setEndDate($val)
    {
        $this->EndDate = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setEmployementType($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->EmployementType = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setContractType($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->ContractType = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setEmploymentSequenceTaxId($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->EmploymentSequenceTaxId = $val;
    }

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setIndefinite($val)
    {
        $this->Indefinite = $val;
    }
}
