<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class AddMemberMessagesAaQtoBidderResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AddMemberMessagesAAQToBidderResponseContainerType | Contains the response information.
     */
    public $AddMemberMessagesAAQToBidderResponseContainer;
    // @codingStandardsIgnoreEnd

    /**
     * @param AddMemberMessagesAAQToBidderResponseContainerType $val
     * @throws Exception
     */
    public function setAddMemberMessagesAAQToBidderResponseContainer($val)
    {
        $this->AddMemberMessagesAAQToBidderResponseContainer = (int)$val;
    }
}
