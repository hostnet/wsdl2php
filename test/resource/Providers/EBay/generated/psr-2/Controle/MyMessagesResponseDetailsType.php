<?php

namespace Controle;

/**
 * MyMessagesResponseDetailsType
 * Details relating to the response to an alert or message.
 */
class MyMessagesResponseDetailsType
{
    /**
     * @var boolean | Whether or not an alert or message can be responded to. To respond to an alert or message,
     * use the URL in ResponseURL. You may need to log into the eBay Web site to complete the
     * response.
     */
    public $responseenabled;
    /**
     * @var \Controle\anyURI | A URL that the recipient must visit to respond to an alert or message. Responding may
     * require logging into the eBay Web site.
     */
    public $responseurl;
    /**
     * @var dateTime | The date and time the user responded to an alert or message
     */
    public $userresponsedate;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setResponseEnabled($val)
    {
        $this->responseenabled = (int)$val;
    }

    /**
     * @param anyURI $val
     * @throws Exception
     */
    public function setResponseURL($val)
    {
        $this->responseurl = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setUserResponseDate($val)
    {
        $this->userresponsedate = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }
}
