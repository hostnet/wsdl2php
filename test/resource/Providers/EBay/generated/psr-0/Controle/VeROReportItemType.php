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
}

