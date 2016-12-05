<?php

namespace Controle;

/**
 * DisputeArrayType
 * Represents a list of disputes. Can hold zero or more Dispute types, each of which describes
 * a dispute.
 */
class DisputeArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\DisputeType | The information that describes a dispute, including the buyer's name, the transaction
     * ID, the dispute state and status, whether the dispute is resolved, and any messages
     * posted to the dispute.
     */
    public $Dispute;
    // @codingStandardsIgnoreEnd

    /**
     * @param DisputeType $val
     * @throws Exception
     */
    public function setDispute($val)
    {
        $this->Dispute = ()$val;
    }
}
