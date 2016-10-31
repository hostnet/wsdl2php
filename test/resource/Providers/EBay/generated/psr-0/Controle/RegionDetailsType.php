<?php

namespace Controle;

/**
 * RegionDetailsType
 * Details about a region.
 */
class RegionDetailsType
{
	/**
	 * @var string | Specifies a region ID. The item must have been listed for the specified region to be returned
	 * in the search result set.
	 */
	public $regionid;
	/**
	 * @var string | Description of a Want It Now post. Description will not be returned for GetWantItNowSearchResults.
	 */
	public $description;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setRegionID($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for RegionID');
        }
        $this->regionid = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDescription($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Description');
        }
        $this->description = (int)$val;
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
