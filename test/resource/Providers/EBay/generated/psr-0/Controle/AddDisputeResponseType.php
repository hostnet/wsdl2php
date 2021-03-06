<?php

namespace Controle;

/**
 * AddDisputeResponseType
 * Returned after calling AddDisputeRequest. The response confirms that the Unpaid Item dispute
 * was successfully created.
 */
class AddDisputeResponseType extends
 \Controle\AbstractResponseType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\DisputeIDType | The unique identifier of a dispute, returned by the eBay site when the dispute is created.
	 */
	public $DisputeID;
	// @codingStandardsIgnoreEnd

	/**
	 * @param DisputeIDType $val
	 * @throws \Exception
	 */
	public function setDisputeID($val)
	{
        $this->DisputeID = $val;
	}
}
