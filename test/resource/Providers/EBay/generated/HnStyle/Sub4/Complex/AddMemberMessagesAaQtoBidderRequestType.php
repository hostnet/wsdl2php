<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class AddMemberMessagesAaQtoBidderRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AddMemberMessagesAAQToBidderRequestContainerType | Allows a seller to send up to 10 messages to bidders and users who have made offers
     * (via Best Offer) during an active listing.
     */
    public $addmembermessagesaaqtobidderrequestcontainer;
    /**
     * @param AddMemberMessagesAAQToBidderRequestContainerType $val
     * @throws Exception
     */
    public function setAddMemberMessagesAAQToBidderRequestContainer($val)
    {
        $this->addmembermessagesaaqtobidderrequestcontainer = (int)$val;
    }
}
