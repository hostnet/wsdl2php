<?php

namespace Controle;

/**
 * GetDisputeResponseType
 * Returned after calling GetDisputeRequest. Returns the record of      a dispute, including
 * the dispute state and other information.
 */
class GetDisputeResponseType extends
 \Controle\AbstractResponseType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\DisputeType | The information that describes a dispute, including the buyer's name, the transaction ID,
	 * the dispute state and status, whether the dispute is resolved, and any messages posted
	 * to the dispute.
	 */
	public $Dispute;
	// @codingStandardsIgnoreEnd

	/**
	 * @param DisputeType $val
	 * @throws Exception
	 */
	public function setDispute($val)
	{
        $this->Dispute = ()$val;
	}
}
