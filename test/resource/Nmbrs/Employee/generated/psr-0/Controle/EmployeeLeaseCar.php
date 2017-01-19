<?php

namespace Controle;

class EmployeeLeaseCar
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Id;
	/**
	 * @var string
	 */
	public $LicensePlate;
	/**
	 * @var decimal
	 */
	public $CatalogValue;
	/**
	 * @var dateTime
	 */
	public $StartDate;
	/**
	 * @var int
	 */
	public $ReasonNoContribution;
	/**
	 * @var int
	 */
	public $ContributionPrivatePercentage;
	/**
	 * @var decimal
	 */
	public $ContributionPrivateUse;
	/**
	 * @var decimal
	 */
	public $ContributionNotDeductible;
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
	 * @param string $val
	 * @throws \Exception
	 */
	public function setLicensePlate($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for LicensePlate');
        }
        $this->LicensePlate = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setCatalogValue($val)
	{
        $this->CatalogValue = $val;
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
	 * @param int $val
	 * @throws \Exception
	 */
	public function setReasonNoContribution($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->ReasonNoContribution = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setContributionPrivatePercentage($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->ContributionPrivatePercentage = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setContributionPrivateUse($val)
	{
        $this->ContributionPrivateUse = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setContributionNotDeductible($val)
	{
        $this->ContributionNotDeductible = $val;
	}
}
