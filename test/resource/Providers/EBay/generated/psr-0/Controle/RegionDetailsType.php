<?php

namespace Controle;

/**
 * RegionDetailsType
 * Details about a region.
 */
class RegionDetailsType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string | Specifies a region ID. The item must have been listed for the specified region to be returned
	 * in the search result set.
	 */
	public $RegionID;
	/**
	 * @var string | Description of a Want It Now post. Description will not be returned for GetWantItNowSearchResults.
	 */
	public $Description;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setRegionID($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for RegionID');
        }
        $this->RegionID = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDescription($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Description');
        }
        $this->Description = $val;
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
