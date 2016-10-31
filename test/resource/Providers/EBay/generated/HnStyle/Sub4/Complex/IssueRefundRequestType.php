<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * IssueRefundRequestType
 * Issues a refund for a single Half.com transaction. This can only be called by a seller.
 * A refund may only be issued for a specific transaction. Sellers do not have the ability
 * to issue a general refund (a refund not tied to a transaction) to a buyer.
 */
class IssueRefundRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
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
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\RefundReasonCodeType | Explanation of the reason that the refund is being issued.
     */
    public $refundreason;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\RefundTypeCodeType | Explanation of the costs that the refund amount covers.
     */
    public $refundtype;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | The amount the seller wants to refund to the buyer, in US Dollars (USD). Must be greater
     * than 0.00. Half.com allows a maximum of the original item sale price (transaction price
     * plus original shipping reimbursement) plus return shipping costs (the amount the buyer
     * paid to return the item). Typically, the return shipping cost is based on the current
     * cost of shipping the individual item (not the discounted cost calculated during the
     * original checkout for a multi-item order). You can also issue a partial refund for the
     * amount you want the buyer to receive. If RefundType=Full or RefundType=FullPlusShipping
     * and you do not pass RefundAmount in the request, Half.com will calculate the refund
     * amount for you. If you pass RefundAmount in the request, the amount you specify will override
     * Half.com's calculated value. Required if RefundType= CustomOrPartial.
     */
    public $refundamount;
    /**
     * @var string | Note to the buyer. Cannot include HTML.
     */
    public $refundmessage;
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
     * @param RefundReasonCodeType $val
     * @throws Exception
     */
    public function setRefundReason($val)
    {
        $this->refundreason = (int)$val;
    }

    /**
     * @param RefundTypeCodeType $val
     * @throws Exception
     */
    public function setRefundType($val)
    {
        $this->refundtype = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setRefundAmount($val)
    {
        $this->refundamount = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setRefundMessage($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for RefundMessage');
        }
        $this->refundmessage = (int)$val;
    }
}