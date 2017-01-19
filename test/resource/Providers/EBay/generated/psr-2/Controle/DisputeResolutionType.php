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
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\DisputeResolutionRecordTypeCodeType | The action resulting from the resolution, affecting either the buyer or the seller.
     */
    public $DisputeResolutionRecordType;
    /**
     * @var \Controle\DisputeResolutionReasonCodeType | The reason for the resolution. The DisputeResolutionReason results in the action described
     * by the DisputeResolutionRecordType.
     */
    public $DisputeResolutionReason;
    /**
     * @var dateTime | The date and time the dispute was resolved, in GMT.
     */
    public $ResolutionTime;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param DisputeResolutionRecordTypeCodeType $val
     * @throws \Exception
     */
    public function setDisputeResolutionRecordType($val)
    {
        $this->DisputeResolutionRecordType = $val;
    }

    /**
     * @param DisputeResolutionReasonCodeType $val
     * @throws \Exception
     */
    public function setDisputeResolutionReason($val)
    {
        $this->DisputeResolutionReason = $val;
    }

    /**
     * @param dateTime $val
     * @throws \Exception
     */
    public function setResolutionTime($val)
    {
        $this->ResolutionTime = $val;
    }

    /**
     * @param <anyXML> $val
     * @throws \Exception
     */
    public function setAny($val)
    {
        $this->any = $val;
    }
}
