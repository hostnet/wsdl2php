<?php

namespace Controle\sub1\sub2;

/**
 * DistanceType
 * DistanceType used in proximity search
 */
class DistanceType
{
	/**
	 * @var int | The measurement used in a proximity search distance calculation.
	 */
	public $distancemeasurement;
	/**
	 * @var string | The unit used in a proximity search distance calculation.
	 */
	public $distanceunit;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setDistanceMeasurement($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->distancemeasurement = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDistanceUnit($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DistanceUnit');
        }
        $this->distanceunit = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (int)$val;
	}
}
