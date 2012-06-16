<?php

namespace Controle\sub1\sub2;
/**
 * GetAdFormatLeadsResponseType
 * Returns number of leads and contact and other information for each lead. One AdFormatLead
 * node is returned for each lead.
 */
class GetAdFormatLeadsResponseType extends \Controle\sub1\sub2\AbstractResponseType {
	/**
	 * @var \Controle\sub1\sub2\AdFormatLeadType | Contains contact and other information for one lead. One node is returned for each lead.
	 * Only returned at a detail level of ReturnAll. At least one lead must be available for the
	 * specified item to return AdFormatLead.
	 */
	public $AdFormatLead;
	/**
	 * @var int | The total number of leads returned. Only returned if you do not specify a detail level.
	 */
	public $AdFormatLeadCount;
}

