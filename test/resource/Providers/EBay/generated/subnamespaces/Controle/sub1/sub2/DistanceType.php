<?php

namespace Controle\sub1\sub2;

/**
 * DistanceType
 * DistanceType used in proximity search
 */
class DistanceType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int | The measurement used in a proximity search distance calculation.
	 */
	public $DistanceMeasurement;
	/**
	 * @var string | The unit used in a proximity search distance calculation.
	 */
	public $DistanceUnit;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setDistanceMeasurement($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->DistanceMeasurement = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDistanceUnit($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for DistanceUnit');
        }
        $this->DistanceUnit = $val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws \Exception
	 */
	public function setAny($val)
	{
        $this->any = $val;
	}
}
