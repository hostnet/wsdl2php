<?php

namespace Controle;
/**
 * VeROReasonCodeDetailsType
 * Container for reason code details for all sites.
 */
class VeROReasonCodeDetailsType {
	/**
	 * @var \Controle\VeROSiteDetailType | Contains reason code details for a site.
	 */
	public $VeROSiteDetail;
	/**
	 * @param VeROSiteDetailType $val
	 * @throws Exception
	 */
	public function setVeROSiteDetail($val) {
		
		$this->VeROSiteDetail = (int)$val;
	}

}

