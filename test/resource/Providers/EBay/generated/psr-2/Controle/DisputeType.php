<?php

namespace Controle;

/**
 * DisputeType
 * Contains all information describing a dispute.
 */
class DisputeType
{
    /**
     * @var \Controle\DisputeIDType | The unique identifier of a dispute, returned by the eBay site when the dispute is created.
     */
    public $disputeid;
    /**
     * @var \Controle\DisputeRecordTypeCodeType | The type of dispute.
     */
    public $disputerecordtype;
    /**
     * @var \Controle\DisputeStateCodeType | The internal state of the dispute. The value determines which values of DisputeActivity
     * are valid when responding to a dispute.
     */
    public $disputestate;
    /**
     * @var \Controle\DisputeStatusCodeType | The status of the dispute, which provides additional information about the dispute state.
     */
    public $disputestatus;
    /**
     * @var \Controle\TradingRoleCodeType | The role of the person involved in the dispute who is not taking action or requesting
     * information. The role is either Buyer or Seller.
     */
    public $otherpartyrole;
    /**
     * @var string | The user name of the person involved in the dispute who is not taking action or requesting
     * information. The role is either Buyer or Seller.
     */
    public $otherpartyname;
    /**
     * @var \Controle\TradingRoleCodeType | The role of the person involved in the dispute who is taking action or  requesting information.
     * The role is either Buyer or Seller.
     */
    public $userrole;
    /**
     * @var \Controle\UserIDType | User ID of the order's buyer. Not applicable to Half.com.
     */
    public $buyeruserid;
    /**
     * @var \Controle\UserIDType | The eBay user ID of the seller involved in the dispute.
     */
    public $selleruserid;
    /**
     * @var string | Identifier for the transaction. A value of zero is used for the Chinese auction format. Thus,
     * a value of zero is a valid transaction ID. A transaction ID is only unique to the listing that
     * spawned it, so a transaction is only uniquely identified on a global basis by a combination
     * of ItemID and TransactionID. Also applicable to Half.com (for GetOrders).
     */
    public $transactionid;
    /**
     * @var \Controle\ItemType | Information about the item that spawned the transaction. It is a purchase from this
     * item's listing that the transaction represents. To remove a property from an item, specify
     * it in ModifyType as a changed property, but do not give it a value in Item. Also applicable
     * to Half.com (for GetOrders).
     */
    public $item;
    /**
     * @var \Controle\DisputeReasonCodeType | The top-level reason for the dispute. The value of DisputeReason determines which values
     * of DisputeExplanation are valid. See DisputeExplanationCodeList for details.
     */
    public $disputereason;
    /**
     * @var \Controle\DisputeExplanationCodeType | The detailed explanation for the dispute. Valid values depend on the value of DisputeReason.
     * See DisputeExplanationCodeList for details.
     */
    public $disputeexplanation;
    /**
     * @var \Controle\DisputeCreditEligibilityCodeType | Whether the dispute is currently eligible for Final Value Fee credit. The value is usually
     * Ineligible until 7 days after the dispute was created, unless a fee exception applies.
     */
    public $disputecrediteligibility;
    /**
     * @var dateTime | The date and time the dispute was created, in GMT.
     */
    public $disputecreatedtime;
    /**
     * @var dateTime | The date and time the dispute was modified, in GMT.
     */
    public $disputemodifiedtime;
    /**
     * @var \Controle\DisputeResolutionType | The action resulting from the dispute resolution. The action might include a Final Value
     * Fee credit to the seller, a strike to the buyer, a reversal, or an appeal.
     */
    public $disputeresolution;
    /**
     * @var \Controle\DisputeMessageType | A response or message posted to a dispute, either by an application or by a user on
     * the eBay site.
     */
    public $disputemessage;
    /**
     * @var boolean | Whether the buyer can close a dispute unhappy and escalate it to the eBay Standard Purchase
     * Protection Program. To escalate, the buyer must be eligible for the PPP. Used in Item
     * Not Received disputes.
     */
    public $escalation;
    /**
     * @var boolean | Whether the buyer is eligible for the eBay Standard Purchase Protection Program. The
     * eligibility rules are described in the eBay site online help. Used in Item Not Received
     * disputes.
     */
    public $purchaseprotection;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @param DisputeIDType $val
     * @throws Exception
     */
    public function setDisputeID($val)
    {
        $this->disputeid = (int)$val;
    }

    /**
     * @param DisputeRecordTypeCodeType $val
     * @throws Exception
     */
    public function setDisputeRecordType($val)
    {
        $this->disputerecordtype = (int)$val;
    }

    /**
     * @param DisputeStateCodeType $val
     * @throws Exception
     */
    public function setDisputeState($val)
    {
        $this->disputestate = (int)$val;
    }

    /**
     * @param DisputeStatusCodeType $val
     * @throws Exception
     */
    public function setDisputeStatus($val)
    {
        $this->disputestatus = (int)$val;
    }

    /**
     * @param TradingRoleCodeType $val
     * @throws Exception
     */
    public function setOtherPartyRole($val)
    {
        $this->otherpartyrole = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setOtherPartyName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for OtherPartyName');
        }
        $this->otherpartyname = (int)$val;
    }

    /**
     * @param TradingRoleCodeType $val
     * @throws Exception
     */
    public function setUserRole($val)
    {
        $this->userrole = (int)$val;
    }

    /**
     * @param UserIDType $val
     * @throws Exception
     */
    public function setBuyerUserID($val)
    {
        $this->buyeruserid = (int)$val;
    }

    /**
     * @param UserIDType $val
     * @throws Exception
     */
    public function setSellerUserID($val)
    {
        $this->selleruserid = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setTransactionID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for TransactionID');
        }
        $this->transactionid = (int)$val;
    }

    /**
     * @param ItemType $val
     * @throws Exception
     */
    public function setItem($val)
    {
        $this->item = (int)$val;
    }

    /**
     * @param DisputeReasonCodeType $val
     * @throws Exception
     */
    public function setDisputeReason($val)
    {
        $this->disputereason = (int)$val;
    }

    /**
     * @param DisputeExplanationCodeType $val
     * @throws Exception
     */
    public function setDisputeExplanation($val)
    {
        $this->disputeexplanation = (int)$val;
    }

    /**
     * @param DisputeCreditEligibilityCodeType $val
     * @throws Exception
     */
    public function setDisputeCreditEligibility($val)
    {
        $this->disputecrediteligibility = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setDisputeCreatedTime($val)
    {
        $this->disputecreatedtime = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setDisputeModifiedTime($val)
    {
        $this->disputemodifiedtime = (int)$val;
    }

    /**
     * @param DisputeResolutionType $val
     * @throws Exception
     */
    public function setDisputeResolution($val)
    {
        $this->disputeresolution = (int)$val;
    }

    /**
     * @param DisputeMessageType $val
     * @throws Exception
     */
    public function setDisputeMessage($val)
    {
        $this->disputemessage = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setEscalation($val)
    {
        $this->escalation = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setPurchaseProtection($val)
    {
        $this->purchaseprotection = (int)$val;
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
