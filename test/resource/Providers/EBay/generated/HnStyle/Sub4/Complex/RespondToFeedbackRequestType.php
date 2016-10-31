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
    /**
     * @var string | Unique identifier for the feedback entry. Returned for a detail level of ReturnAll (if
     * the parent is returned).
     */
    public $feedbackid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $itemid;
    /**
     * @var string | Identifier for the transaction. A value of zero is used for the Chinese auction format. Thus,
     * a value of zero is a valid transaction ID. A transaction ID is only unique to the listing that
     * spawned it, so a transaction is only uniquely identified on a global basis by a combination
     * of ItemID and TransactionID. Also applicable to Half.com (for GetOrders).
     */
    public $transactionid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\UserIDType | User who left the feedback that is being replied to or followed up on.
     */
    public $targetuserid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\FeedbackResponseCodeType | Specifies whether the response is a reply or a follow-up.
     */
    public $responsetype;
    /**
     * @var string | Textual comment that the user who is subject of feedback may leave in response or rebuttal
     * to the feedback. Alternatively, when the  ResponseType is FollowUp, this value contains
     * the text of the follow-up comment. Max length is 125 for the Taiwan site.
     */
    public $responsetext;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setFeedbackID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for FeedbackID');
        }
        $this->feedbackid = (int)$val;
    }

    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        $this->itemid = (int)$val;
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
     * @param UserIDType $val
     * @throws Exception
     */
    public function setTargetUserID($val)
    {
        $this->targetuserid = (int)$val;
    }

    /**
     * @param FeedbackResponseCodeType $val
     * @throws Exception
     */
    public function setResponseType($val)
    {
        $this->responsetype = (int)$val;
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
        $this->responsetext = (int)$val;
    }
}
