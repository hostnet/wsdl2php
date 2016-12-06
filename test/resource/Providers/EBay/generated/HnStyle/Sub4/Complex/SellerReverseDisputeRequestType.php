<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * SellerReverseDisputeRequestType
 * Enables a seller to "reverse" an Unpaid Item dispute that has been closed, for example,
 * if buyer and seller reach an agreement. The seller's Final Value Fee credit and the buyer's
 * strike are both reversed, if applicable. The dispute might have resulted in a strike to
 * the buyer and a Final Value Fee credit to the seller. A buyer and seller sometimes come
 * to agreement after a dispute has been closed. In particular, the seller might discover that
 * the buyer actually paid, or the buyer might agree to pay the seller's fees in exchange for
 * having the strike removed. <br><br> A dispute can only be reversed if it was closed with
 * DisputeActivity set to SellerEndCommunication, CameToAgreementNeedFVFCredit, or MutualAgreementOrNoBuyerResponse.
 */
class SellerReverseDisputeRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DisputeIDType | The unique identifier of a dispute, returned by the eBay site when the dispute is created.
     */
    public $DisputeID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DisputeResolutionReasonCodeType | The reason for the resolution. The DisputeResolutionReason results in the action described
     * by the DisputeResolutionRecordType.
     */
    public $DisputeResolutionReason;
    // @codingStandardsIgnoreEnd

    /**
     * @param DisputeIDType $val
     * @throws Exception
     */
    public function setDisputeID($val)
    {
        $this->DisputeID = $val;
    }

    /**
     * @param DisputeResolutionReasonCodeType $val
     * @throws Exception
     */
    public function setDisputeResolutionReason($val)
    {
        $this->DisputeResolutionReason = $val;
    }
}
