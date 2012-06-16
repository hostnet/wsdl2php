<?php

namespace Controle\sub1\sub2;
/**
 * CharityAffiliationsType
 * Lists the nonprofit charity organization affiliations for a specified user.
 */
class CharityAffiliationsType {
	/**
	 * @var \Controle\sub1\sub2\CharityIDType | A unique identification number assigned by eBay to registered nonprofit charity organizations.
	 * Required input when listing Giving Works items.
	 */
	public $CharityID;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

