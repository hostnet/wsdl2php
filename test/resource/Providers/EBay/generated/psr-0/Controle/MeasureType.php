<?php

namespace Controle;
/**
 * MeasureType
 * Basic type for specifying measures and the system of measurement. A decimal value (e.g.,
 * 10.25) is meaningful as a measure when accompanied by a definition of the unit of measure
 * (e.g., Pounds), in which case the value specifies the quantity of that unit. A MeasureType
 * expresses both the value (a decimal) and, optionally, the unit and the system of measurement. Details
 * such as shipping weights are specified as measure types.
 */
class MeasureType {
	/**
	 * @var decimal
	 */
	public $_;
	/**
	 * @var \Controle\token
	 */
	public $unit;
	/**
	 * @var \Controle\MeasurementSystemCodeType
	 */
	public $measurementSystem;
}

