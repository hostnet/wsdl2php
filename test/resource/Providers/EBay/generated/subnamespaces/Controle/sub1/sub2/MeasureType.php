<?php

namespace Controle\sub1\sub2;

/**
 * MeasureType
 * Basic type for specifying measures and the system of measurement. A decimal value (e.g.,
 * 10.25) is meaningful as a measure when accompanied by a definition of the unit of measure
 * (e.g., Pounds), in which case the value specifies the quantity of that unit. A MeasureType
 * expresses both the value (a decimal) and, optionally, the unit and the system of measurement. Details
 * such as shipping weights are specified as measure types.
 */
class MeasureType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var decimal
	 */
	public $_;
	/**
	 * @var \Controle\sub1\sub2\token
	 */
	public $unit;
	/**
	 * @var \Controle\sub1\sub2\MeasurementSystemCodeType
	 */
	public $measurementSystem;
	// @codingStandardsIgnoreEnd

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function set($val)
	{
        $this->_ = $val;
	}

	/**
	 * @param token $val
	 * @throws \Exception
	 */
	public function setUnit($val)
	{
        $this->unit = $val;
	}

	/**
	 * @param MeasurementSystemCodeType $val
	 * @throws \Exception
	 */
	public function setMeasurementSystem($val)
	{
        $this->measurementSystem = $val;
	}
}
