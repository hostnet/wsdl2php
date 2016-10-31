<?php

namespace Controle;

/**
 * DisputeResolutionType
 * Contains all information about a dispute resolution. A dispute can have a resolution even
 * if the seller does not receive payment. The resolution can have various results, including
 * a Final Value Fee credit to the seller or a strike to the buyer.
 */
class DisputeResolutionType
{
	/**
	 * @var \Controle\DisputeResolutionRecordTypeCodeType | The action resulting from the resolution, affecting either the buyer or the seller.
	 */
	public $disputeresolutionrecordtype;
	/**
	 * @var \Controle\DisputeResolutionReasonCodeType | The reason for the resolution. The DisputeResolutionReason results in the action described
	 * by the DisputeResolutionRecordType.
	 */
	public $disputeresolutionreason;
	/**
	 * @var dateTime | The date and time the dispute was resolved, in GMT.
	 */
	public $resolutiontime;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param DisputeResolutionRecordTypeCodeType $val
	 * @throws Exception
	 */
	public function setDisputeResolutionRecordType($val)
	{
        $this->disputeresolutionrecordtype = (int)$val;
	}

	/**
	 * @param DisputeResolutionReasonCodeType $val
	 * @throws Exception
	 */
	public function setDisputeResolutionReason($val)
	{
        $this->disputeresolutionreason = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setResolutionTime($val)
	{
        $this->resolutiontime = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (int)$val;
	}
}
