<?php

namespace Controle\sub1\sub2;

/**
 * GetStoreCategoryUpdateStatusResponseType
 * Returns the store category structure update status, when a prior SetStoreCategories call
 * was processed asynchronously. If a SetStoreCategories request affects many listings, then
 * the category structure changes will be processed asynchronously. If not many listings are
 * affected by category structure changes, the status is returned in the SetStoreCategories
 * response.
 */
class GetStoreCategoryUpdateStatusResponseType extends
 \Controle\sub1\sub2\AbstractResponseType
{
	/**
	 * @var \Controle\sub1\sub2\TaskStatusCodeType | Indicates the user's registration/user status. To be eligible to list on Express, a seller's
	 * status must be Confirmed. See "eBay Express" in the eBay Web Services guide.
	 */
	public $status;
	/**
	 * @param TaskStatusCodeType $val
	 * @throws Exception
	 */
	public function setStatus($val)
	{
        $this->status = (int)$val;
	}
}
