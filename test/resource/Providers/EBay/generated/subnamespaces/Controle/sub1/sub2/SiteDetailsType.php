<?php

namespace Controle\sub1\sub2;
/**
 * SiteDetailsType
 * Details about a specific site.
 */
class SiteDetailsType {
	/**
	 * @var \Controle\sub1\sub2\SiteCodeType | Site where the Want It Now post is listed.
	 */
	public $Site;
	/**
	 * @var int | 	 */
	public $SiteID;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param SiteCodeType $val
	 * @throws Exception
	 */
	public function setSite($val) {
		
		$this->Site = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setSiteID($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->SiteID = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val) {
		
		$this->any = (int)$val;
	}

}

