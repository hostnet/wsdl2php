<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * DisputeArrayType
 * Represents a list of disputes. Can hold zero or more Dispute types, each of which describes
 * a dispute.
 */
class DisputeArrayType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DisputeType | The information that describes a dispute, including the buyer's name, the transaction
     * ID, the dispute state and status, whether the dispute is resolved, and any messages
     * posted to the dispute.
     */
    public $dispute;
    /**
     * @param DisputeType $val
     * @throws Exception
     */
    public function setDispute($val)
    {
        $this->dispute = (int)$val;
    }
}
