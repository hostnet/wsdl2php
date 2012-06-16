<?php

namespace Controle\sub1\sub2;
/**
 * VeROReasonCodeDetailsType
 * Container for reason code details for all sites.
 */
class VeROReasonCodeDetailsType {
	/**
	 * @var \Controle\sub1\sub2\VeROSiteDetailType | Contains reason code details for a site.
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

