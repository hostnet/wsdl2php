<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * LeaveFeedbackRequestType
 * Enables a user to leave feedback about another user. Both users (the sender  and the recipient)
 * must have a transactional relationship. That is, they must have both been participants in
 * a successfully concluded item sale transaction that took place no more than 90 days prior.
 * Also, the sending user cannot have already left feedback for the recipient for the transaction.
 */
class LeaveFeedbackRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $ItemID;
    /**
     * @var string | Textual comment that explains, clarifies, or justifies the feedback rating specified
     * in CommentType. Still displayed if feedback is withdrawn.
     */
    public $CommentText;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CommentTypeCodeType | Rating of the feedback being left (e.g., Positive).
     */
    public $CommentType;
    /**
     * @var string | Identifier for the transaction. A value of zero is used for the Chinese auction format. Thus,
     * a value of zero is a valid transaction ID. A transaction ID is only unique to the listing that
     * spawned it, so a transaction is only uniquely identified on a global basis by a combination
     * of ItemID and TransactionID. Also applicable to Half.com (for GetOrders).
     */
    public $TransactionID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\UserIDType | Recipient user for whom the feedback is being left.
     */
    public $TargetUser;
    // @codingStandardsIgnoreEnd

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
    public function setCommentText($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CommentText');
        }
        $this->CommentText = (string)$val;
    }

    /**
     * @param CommentTypeCodeType $val
     * @throws Exception
     */
    public function setCommentType($val)
    {
        $this->CommentType = (CommentTypeCodeType)$val;
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
    public function setTargetUser($val)
    {
        $this->TargetUser = (UserIDType)$val;
    }
}
