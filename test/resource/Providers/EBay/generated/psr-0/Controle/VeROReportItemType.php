<?php

namespace Controle;
/**
 * VeROReportItemType
 * Contains the item information to report.
 */
class VeROReportItemType {
	/**
	 * @var \Controle\ItemIDType | The item ID of the item reported for infringment.
	 */
	public $ItemID;
	/**
	 * @var long | The resaon code identifier for the type of claimed infringement. Use GetVeROReasonCodeDetails
	 * to retrieve a list of reason codes for a given site or all sites.
	 */
	public $VeROReasonCodeID;
	/**
	 * @var string | Message from the VeRO Program member to the seller of the item being reported.
	 */
	public $MessageToSeller;
	/**
	 * @var boolean | When set to true, this specifies that the VeRO Program member be copied on the Notice of
	 * Claimed Infringement (NOCI) email sent to sellers of reported items.
	 */
	public $CopyEmailToRightsOwner;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param ItemIDType $val
	 * @throws Exception
	 */
	public function setItemID($val) {
		
		$this->ItemID = (int)$val;
	}

	/**
	 * @param long $val
	 * @throws Exception
	 */
	public function setVeROReasonCodeID($val) {
		
		$this->VeROReasonCodeID = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setMessageToSeller($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for MessageToSeller');
		$this->MessageToSeller = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setCopyEmailToRightsOwner($val) {
		
		$this->CopyEmailToRightsOwner = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val) {
		
		$this->any = (int)$val;
	}

}

