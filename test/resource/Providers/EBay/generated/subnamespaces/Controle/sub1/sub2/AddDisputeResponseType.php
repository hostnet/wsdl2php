<?php

namespace Controle\sub1\sub2;

/**
 * AddDisputeResponseType
 * Returned after calling AddDisputeRequest. The response confirms that the Unpaid Item dispute
 * was successfully created.
 */
class AddDisputeResponseType extends
 \Controle\sub1\sub2\AbstractResponseType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\DisputeIDType | The unique identifier of a dispute, returned by the eBay site when the dispute is created.
	 */
	public $DisputeID;
	// @codingStandardsIgnoreEnd

	/**
	 * @param DisputeIDType $val
	 * @throws Exception
	 */
	public function setDisputeID($val)
	{
        $this->DisputeID = (DisputeIDType)$val;
	}
}
