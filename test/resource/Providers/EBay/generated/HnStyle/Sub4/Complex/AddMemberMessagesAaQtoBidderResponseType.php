<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class AddMemberMessagesAaQtoBidderResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AddMemberMessagesAAQToBidderResponseContainerType | Contains the response information.
     */
    public $addmembermessagesaaqtobidderresponsecontainer;
    /**
     * @param AddMemberMessagesAAQToBidderResponseContainerType $val
     * @throws Exception
     */
    public function setAddMemberMessagesAAQToBidderResponseContainer($val)
    {
        $this->addmembermessagesaaqtobidderresponsecontainer = (int)$val;
    }
}
