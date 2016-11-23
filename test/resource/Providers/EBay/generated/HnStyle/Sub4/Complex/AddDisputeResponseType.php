<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * AddDisputeResponseType
 * Returned after calling AddDisputeRequest. The response confirms that the Unpaid Item dispute
 * was successfully created.
 */
class AddDisputeResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DisputeIDType | The unique identifier of a dispute, returned by the eBay site when the dispute is created.
     */
    public $DisputeID;
    // @codingStandardsIgnoreEnd

    /**
     * @param DisputeIDType $val
     * @throws Exception
     */
    public function setDisputeID($val)
    {
        $this->DisputeID = (int)$val;
    }
}
