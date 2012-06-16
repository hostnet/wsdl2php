<?php

class eBxOptInPreferenceType {
    /**
     * @var boolean
     */
    public $eBxOptInPreference;
    /**
     * @var Controle<anyXML>
     */
    public $any;

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setEBxOptInPreference($val) {
		
		$this->eBxOptInPreference = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val) {
		
		$this->any = (int)$val;
	}
}


