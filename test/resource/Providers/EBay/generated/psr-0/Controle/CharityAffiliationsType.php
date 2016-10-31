<?php

namespace Controle;
/**
 * CharityAffiliationsType
 * Lists the nonprofit charity organization affiliations for a specified user.
 */
class CharityAffiliationsType {
	/**
	 * @var \Controle\CharityIDType | A unique identification number assigned by eBay to registered nonprofit charity organizations.
	 * Required input when listing Giving Works items.
	 */
	public $CharityID;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param CharityIDType $val
	 * @throws Exception
	 */
	public function setCharityID($val) {
		
		$this->CharityID = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val) {
		
		$this->any = (int)$val;
	}

}

