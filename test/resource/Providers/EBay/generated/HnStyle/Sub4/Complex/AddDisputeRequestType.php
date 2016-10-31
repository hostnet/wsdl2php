<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * AddDisputeRequestType
 * Enables a seller to create a new Unpaid Item dispute. (Item Not Received disputes can only
 * be created via the eBay web site.)
 */
class AddDisputeRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DisputeExplanationCodeType | The detailed explanation for the dispute. Valid values depend on the value of DisputeReason.
     * See DisputeExplanationCodeList for details.
     */
    public $disputeexplanation;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DisputeReasonCodeType | The top-level reason for the dispute. The value of DisputeReason determines which values
     * of DisputeExplanation are valid. See DisputeExplanationCodeList for details.
     */
    public $disputereason;
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
     * @param DisputeExplanationCodeType $val
     * @throws Exception
     */
    public function setDisputeExplanation($val)
    {
        $this->disputeexplanation = (int)$val;
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
}
