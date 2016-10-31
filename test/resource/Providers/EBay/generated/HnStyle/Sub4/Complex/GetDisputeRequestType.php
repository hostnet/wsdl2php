<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetDisputeRequestType
 * Requests the details of a dispute corresponding to the given dispute ID, any time after
 * the dispute was opened and up to five years after it was closed. Can be used with Unpaid
 * Item or Item Not Received disputes.
 */
class GetDisputeRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DisputeIDType | The unique identifier of a dispute, returned by the eBay site when the dispute is created.
     */
    public $disputeid;
    /**
     * @param DisputeIDType $val
     * @throws Exception
     */
    public function setDisputeID($val)
    {
        $this->disputeid = (int)$val;
    }
}
