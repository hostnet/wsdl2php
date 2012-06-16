<?php

namespace Controle\sub1\sub2;
/**
 * CharityIDType
 * Defines the affiliation status for a nonprofit charity organization registered with the
 * eBay Giving Works provider.
 */
class CharityIDType {
	/**
	 * @var string
	 */
	public $_;
	/**
	 * @var \Controle\sub1\sub2\CharityAffiliationTypeCodeType
	 */
	public $type;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function set_($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for _');
		$this->_ = (int)$val;
	}

	/**
	 * @param CharityAffiliationTypeCodeType $val
	 * @throws Exception
	 */
	public function setType($val) {
		
		$this->type = (int)$val;
	}

}

