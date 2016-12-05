<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * RespondToFeedbackRequestType
 * Enables users to reply to feedback left by the other party in the transaction and/or follow
 * up on the feedback left for the other party.
 */
class RespondToFeedbackRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | Unique identifier for the feedback entry. Returned for a detail level of ReturnAll (if
     * the parent is returned).
     */
    public $FeedbackID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $ItemID;
    /**
     * @var string | Identifier for the transaction. A value of zero is used for the Chinese auction format. Thus,
     * a value of zero is a valid transaction ID. A transaction ID is only unique to the listing that
     * spawned it, so a transaction is only uniquely identified on a global basis by a combination
     * of ItemID and TransactionID. Also applicable to Half.com (for GetOrders).
     */
    public $TransactionID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\UserIDType | User who left the feedback that is being replied to or followed up on.
     */
    public $TargetUserID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\FeedbackResponseCodeType | Specifies whether the response is a reply or a follow-up.
     */
    public $ResponseType;
    /**
     * @var string | Textual comment that the user who is subject of feedback may leave in response or rebuttal
     * to the feedback. Alternatively, when the  ResponseType is FollowUp, this value contains
     * the text of the follow-up comment. Max length is 125 for the Taiwan site.
     */
    public $ResponseText;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setFeedbackID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for FeedbackID');
        }
        $this->FeedbackID = (string)$val;
    }

    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        $this->ItemID = (ItemIDType)$val;
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
        $this->TransactionID = (string)$val;
    }

    /**
     * @param UserIDType $val
     * @throws Exception
     */
    public function setTargetUserID($val)
    {
        $this->TargetUserID = (UserIDType)$val;
    }

    /**
     * @param FeedbackResponseCodeType $val
     * @throws Exception
     */
    public function setResponseType($val)
    {
        $this->ResponseType = (FeedbackResponseCodeType)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setResponseText($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ResponseText');
        }
        $this->ResponseText = (string)$val;
    }
}
