<?php

namespace Controle;
/**
 * MyMessagesForwardDetailsType
 * Details relating to the forwarding of an alert or message.
 */
class MyMessagesForwardDetailsType {
    /**
     * @var dateTime | The date and time a user forwarded an alert or message.
     */
    public $UserForwardDate;
    /**
     * @var string | Encoding used to forward an alert or message.
     */
    public $ForwardMessageEncoding;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}

