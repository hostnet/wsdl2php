<?php

namespace Controle\sub1\sub2;

class EmployeeCostCenter
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Id;
	/**
	 * @var \Controle\sub1\sub2\CostCenter
	 */
	public $CostCenter;
	/**
	 * @var \Controle\sub1\sub2\Kostensoort
	 */
	public $Kostensoort;
	/**
	 * @var decimal
	 */
	public $Percentage;
	/**
	 * @var boolean
	 */
	public $Default;
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
	 * @param CostCenter $val
	 * @throws \Exception
	 */
	public function setCostCenter($val)
	{
        $this->CostCenter = $val;
	}

	/**
	 * @param Kostensoort $val
	 * @throws \Exception
	 */
	public function setKostensoort($val)
	{
        $this->Kostensoort = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setPercentage($val)
	{
        $this->Percentage = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setDefault($val)
	{
        $this->Default = $val;
	}
}
