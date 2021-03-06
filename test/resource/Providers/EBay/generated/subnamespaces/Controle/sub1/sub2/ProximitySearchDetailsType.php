<?php

namespace Controle\sub1\sub2;

/**
 * ProximitySearchDetailsType
 * Contains information for use in proximity search.
 */
class ProximitySearchDetailsType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string | The postal code to use as the basis for the proximity search.
	 */
	public $PostalCode;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPostalCode($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for PostalCode');
        }
        $this->PostalCode = $val;
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
