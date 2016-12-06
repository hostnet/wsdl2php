<?php

namespace Controle\sub1\sub2;

/**
 * CharityAffiliationsType
 * Lists the nonprofit charity organization affiliations for a specified user.
 */
class CharityAffiliationsType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\CharityIDType | A unique identification number assigned by eBay to registered nonprofit charity organizations.
	 * Required input when listing Giving Works items.
	 */
	public $CharityID;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param CharityIDType $val
	 * @throws Exception
	 */
	public function setCharityID($val)
	{
        $this->CharityID = $val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = $val;
	}
}
