<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * MyMessagesAlertType
 * Returns an alert header and full alert information.
 */
class MyMessagesAlertType
{
    /**
     * @var string | The display name of the eBay user that sent the message.
     */
    public $sender;
    /**
     * @var string | The displayable user ID of the recipient.
     */
    public $recipientuserid;
    /**
     * @var string | The subject of the message.
     */
    public $subject;
    /**
     * @var string | A number ranging from 0 to 10000 (inclusive), with 10000 having the highest priority.
     */
    public $priority;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MyMessagesAlertIDType | An ID that uniquely identifies an alert for a given user.
     */
    public $alertid;
    /**
     * @var string | An ID used by an external application to uniquely identify an alert.
     */
    public $externalalertid;
    /**
     * @var string | The content type of the body text. The three acceptable values are "TEXT", "HTML",
     * and "XML" (case sensitive).
     */
    public $contenttype;
    /**
     * @var string | Suggestion for a different spelling of the search term or terms. The suggestions are
     * given in Text tags  and the suggestion for the first word is given before the suggestion
     * for subsequent words.  Suggestions are based on correctly-spelled terms in items, so
     * suggestions vary over time and depend on   whether a word or word combination is in
     * one or more items.
     */
    public $text;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MyMessagesAlertResolutionStatusCode | Whether or not an alert was resolved, and how.
     */
    public $resolutionstatus;
    /**
     * @var boolean | Whether or not a message has been viewed by a given user. Note that retrieving a message
     * with the API does not mark it as read.
     */
    public $read;
    /**
     * @var dateTime | The date and time that a message was created by the sender.
     */
    public $creationdate;
    /**
     * @var dateTime | The date and time that a message was received by My Messages and stored in a database
     * for the recipient.
     */
    public $receivedate;
    /**
     * @var dateTime | The date and time at which a message expires.
     */
    public $expirationdate;
    /**
     * @var dateTime | The date and time at which an alert is resolved.
     */
    public $resolutiondate;
    /**
     * @var dateTime | The date and time an alert was last viewed by a given user.
     */
    public $lastreaddate;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $itemid;
    /**
     * @var boolean | Indicates whether or not a time-delayed resolution is applicable for an alert.
     */
    public $istimedresolution;
    /**
     * @var string | A URL that the recipient must visit to resolve an alert. May be returned as an empty
     * tag if there is no applicable URL.
     */
    public $actionurl;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MyMessagesResponseDetailsType | Details relating to the response to an alert or message.
     */
    public $responsedetails;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MyMessagesForwardDetailsType | Details relating to the forwarding of an alert or message. Only returned if the alert
     * or message is forwarded.
     */
    public $forwarddetails;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MyMessagesFolderType | The folder requested in the album.
     */
    public $folder;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setSender($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Sender');
        }
        $this->sender = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setRecipientUserID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for RecipientUserID');
        }
        $this->recipientuserid = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSubject($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Subject');
        }
        $this->subject = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setPriority($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Priority');
        }
        $this->priority = (int)$val;
    }

    /**
     * @param MyMessagesAlertIDType $val
     * @throws Exception
     */
    public function setAlertID($val)
    {
        $this->alertid = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setExternalAlertID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ExternalAlertID');
        }
        $this->externalalertid = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setContentType($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ContentType');
        }
        $this->contenttype = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setText($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Text');
        }
        $this->text = (int)$val;
    }

    /**
     * @param MyMessagesAlertResolutionStatusCode $val
     * @throws Exception
     */
    public function setResolutionStatus($val)
    {
        $this->resolutionstatus = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setRead($val)
    {
        $this->read = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setCreationDate($val)
    {
        $this->creationdate = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setReceiveDate($val)
    {
        $this->receivedate = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setExpirationDate($val)
    {
        $this->expirationdate = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setResolutionDate($val)
    {
        $this->resolutiondate = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setLastReadDate($val)
    {
        $this->lastreaddate = (int)$val;
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
     * @param boolean $val
     * @throws Exception
     */
    public function setIsTimedResolution($val)
    {
        $this->istimedresolution = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setActionURL($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ActionURL');
        }
        $this->actionurl = (int)$val;
    }

    /**
     * @param MyMessagesResponseDetailsType $val
     * @throws Exception
     */
    public function setResponseDetails($val)
    {
        $this->responsedetails = (int)$val;
    }

    /**
     * @param MyMessagesForwardDetailsType $val
     * @throws Exception
     */
    public function setForwardDetails($val)
    {
        $this->forwarddetails = (int)$val;
    }

    /**
     * @param MyMessagesFolderType $val
     * @throws Exception
     */
    public function setFolder($val)
    {
        $this->folder = (int)$val;
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
