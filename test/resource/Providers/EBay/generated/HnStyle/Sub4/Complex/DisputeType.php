<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * DisputeType
 * Contains all information describing a dispute.
 */
class DisputeType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DisputeIDType | The unique identifier of a dispute, returned by the eBay site when the dispute is created.
     */
    public $DisputeID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DisputeRecordTypeCodeType | The type of dispute.
     */
    public $DisputeRecordType;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DisputeStateCodeType | The internal state of the dispute. The value determines which values of DisputeActivity
     * are valid when responding to a dispute.
     */
    public $DisputeState;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DisputeStatusCodeType | The status of the dispute, which provides additional information about the dispute state.
     */
    public $DisputeStatus;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\TradingRoleCodeType | The role of the person involved in the dispute who is not taking action or requesting
     * information. The role is either Buyer or Seller.
     */
    public $OtherPartyRole;
    /**
     * @var string | The user name of the person involved in the dispute who is not taking action or requesting
     * information. The role is either Buyer or Seller.
     */
    public $OtherPartyName;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\TradingRoleCodeType | The role of the person involved in the dispute who is taking action or  requesting information.
     * The role is either Buyer or Seller.
     */
    public $UserRole;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\UserIDType | User ID of the order's buyer. Not applicable to Half.com.
     */
    public $BuyerUserID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\UserIDType | The eBay user ID of the seller involved in the dispute.
     */
    public $SellerUserID;
    /**
     * @var string | Identifier for the transaction. A value of zero is used for the Chinese auction format. Thus,
     * a value of zero is a valid transaction ID. A transaction ID is only unique to the listing that
     * spawned it, so a transaction is only uniquely identified on a global basis by a combination
     * of ItemID and TransactionID. Also applicable to Half.com (for GetOrders).
     */
    public $TransactionID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemType | Information about the item that spawned the transaction. It is a purchase from this
     * item's listing that the transaction represents. To remove a property from an item, specify
     * it in ModifyType as a changed property, but do not give it a value in Item. Also applicable
     * to Half.com (for GetOrders).
     */
    public $Item;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DisputeReasonCodeType | The top-level reason for the dispute. The value of DisputeReason determines which values
     * of DisputeExplanation are valid. See DisputeExplanationCodeList for details.
     */
    public $DisputeReason;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DisputeExplanationCodeType | The detailed explanation for the dispute. Valid values depend on the value of DisputeReason.
     * See DisputeExplanationCodeList for details.
     */
    public $DisputeExplanation;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DisputeCreditEligibilityCodeType | Whether the dispute is currently eligible for Final Value Fee credit. The value is usually
     * Ineligible until 7 days after the dispute was created, unless a fee exception applies.
     */
    public $DisputeCreditEligibility;
    /**
     * @var dateTime | The date and time the dispute was created, in GMT.
     */
    public $DisputeCreatedTime;
    /**
     * @var dateTime | The date and time the dispute was modified, in GMT.
     */
    public $DisputeModifiedTime;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DisputeResolutionType | The action resulting from the dispute resolution. The action might include a Final Value
     * Fee credit to the seller, a strike to the buyer, a reversal, or an appeal.
     */
    public $DisputeResolution;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DisputeMessageType | A response or message posted to a dispute, either by an application or by a user on
     * the eBay site.
     */
    public $DisputeMessage;
    /**
     * @var boolean | Whether the buyer can close a dispute unhappy and escalate it to the eBay Standard Purchase
     * Protection Program. To escalate, the buyer must be eligible for the PPP. Used in Item
     * Not Received disputes.
     */
    public $Escalation;
    /**
     * @var boolean | Whether the buyer is eligible for the eBay Standard Purchase Protection Program. The
     * eligibility rules are described in the eBay site online help. Used in Item Not Received
     * disputes.
     */
    public $PurchaseProtection;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param DisputeIDType $val
     * @throws \Exception
     */
    public function setDisputeID($val)
    {
        $this->DisputeID = $val;
    }

    /**
     * @param DisputeRecordTypeCodeType $val
     * @throws \Exception
     */
    public function setDisputeRecordType($val)
    {
        $this->DisputeRecordType = $val;
    }

    /**
     * @param DisputeStateCodeType $val
     * @throws \Exception
     */
    public function setDisputeState($val)
    {
        $this->DisputeState = $val;
    }

    /**
     * @param DisputeStatusCodeType $val
     * @throws \Exception
     */
    public function setDisputeStatus($val)
    {
        $this->DisputeStatus = $val;
    }

    /**
     * @param TradingRoleCodeType $val
     * @throws \Exception
     */
    public function setOtherPartyRole($val)
    {
        $this->OtherPartyRole = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setOtherPartyName($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for OtherPartyName');
        }
        $this->OtherPartyName = $val;
    }

    /**
     * @param TradingRoleCodeType $val
     * @throws \Exception
     */
    public function setUserRole($val)
    {
        $this->UserRole = $val;
    }

    /**
     * @param UserIDType $val
     * @throws \Exception
     */
    public function setBuyerUserID($val)
    {
        $this->BuyerUserID = $val;
    }

    /**
     * @param UserIDType $val
     * @throws \Exception
     */
    public function setSellerUserID($val)
    {
        $this->SellerUserID = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setTransactionID($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for TransactionID');
        }
        $this->TransactionID = $val;
    }

    /**
     * @param ItemType $val
     * @throws \Exception
     */
    public function setItem($val)
    {
        $this->Item = $val;
    }

    /**
     * @param DisputeReasonCodeType $val
     * @throws \Exception
     */
    public function setDisputeReason($val)
    {
        $this->DisputeReason = $val;
    }

    /**
     * @param DisputeExplanationCodeType $val
     * @throws \Exception
     */
    public function setDisputeExplanation($val)
    {
        $this->DisputeExplanation = $val;
    }

    /**
     * @param DisputeCreditEligibilityCodeType $val
     * @throws \Exception
     */
    public function setDisputeCreditEligibility($val)
    {
        $this->DisputeCreditEligibility = $val;
    }

    /**
     * @param dateTime $val
     * @throws \Exception
     */
    public function setDisputeCreatedTime($val)
    {
        $this->DisputeCreatedTime = $val;
    }

    /**
     * @param dateTime $val
     * @throws \Exception
     */
    public function setDisputeModifiedTime($val)
    {
        $this->DisputeModifiedTime = $val;
    }

    /**
     * @param DisputeResolutionType $val
     * @throws \Exception
     */
    public function setDisputeResolution($val)
    {
        $this->DisputeResolution = $val;
    }

    /**
     * @param DisputeMessageType $val
     * @throws \Exception
     */
    public function setDisputeMessage($val)
    {
        $this->DisputeMessage = $val;
    }

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setEscalation($val)
    {
        $this->Escalation = $val;
    }

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setPurchaseProtection($val)
    {
        $this->PurchaseProtection = $val;
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
