<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * MyMessagesAlertType
 * Returns an alert header and full alert information.
 */
class MyMessagesAlertType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | The display name of the eBay user that sent the message.
     */
    public $Sender;
    /**
     * @var string | The displayable user ID of the recipient.
     */
    public $RecipientUserID;
    /**
     * @var string | The subject of the message.
     */
    public $Subject;
    /**
     * @var string | A number ranging from 0 to 10000 (inclusive), with 10000 having the highest priority.
     */
    public $Priority;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MyMessagesAlertIDType | An ID that uniquely identifies an alert for a given user.
     */
    public $AlertID;
    /**
     * @var string | An ID used by an external application to uniquely identify an alert.
     */
    public $ExternalAlertID;
    /**
     * @var string | The content type of the body text. The three acceptable values are "TEXT", "HTML",
     * and "XML" (case sensitive).
     */
    public $ContentType;
    /**
     * @var string | Suggestion for a different spelling of the search term or terms. The suggestions are
     * given in Text tags  and the suggestion for the first word is given before the suggestion
     * for subsequent words.  Suggestions are based on correctly-spelled terms in items, so
     * suggestions vary over time and depend on   whether a word or word combination is in
     * one or more items.
     */
    public $Text;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MyMessagesAlertResolutionStatusCode | Whether or not an alert was resolved, and how.
     */
    public $ResolutionStatus;
    /**
     * @var boolean | Whether or not a message has been viewed by a given user. Note that retrieving a message
     * with the API does not mark it as read.
     */
    public $Read;
    /**
     * @var dateTime | The date and time that a message was created by the sender.
     */
    public $CreationDate;
    /**
     * @var dateTime | The date and time that a message was received by My Messages and stored in a database
     * for the recipient.
     */
    public $ReceiveDate;
    /**
     * @var dateTime | The date and time at which a message expires.
     */
    public $ExpirationDate;
    /**
     * @var dateTime | The date and time at which an alert is resolved.
     */
    public $ResolutionDate;
    /**
     * @var dateTime | The date and time an alert was last viewed by a given user.
     */
    public $LastReadDate;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $ItemID;
    /**
     * @var boolean | Indicates whether or not a time-delayed resolution is applicable for an alert.
     */
    public $IsTimedResolution;
    /**
     * @var string | A URL that the recipient must visit to resolve an alert. May be returned as an empty
     * tag if there is no applicable URL.
     */
    public $ActionURL;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MyMessagesResponseDetailsType | Details relating to the response to an alert or message.
     */
    public $ResponseDetails;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MyMessagesForwardDetailsType | Details relating to the forwarding of an alert or message. Only returned if the alert
     * or message is forwarded.
     */
    public $ForwardDetails;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MyMessagesFolderType | The folder requested in the album.
     */
    public $Folder;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSender($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Sender');
        }
        $this->Sender = ()$val;
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
        $this->RecipientUserID = ()$val;
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
        $this->Subject = ()$val;
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
        $this->Priority = ()$val;
    }

    /**
     * @param MyMessagesAlertIDType $val
     * @throws Exception
     */
    public function setAlertID($val)
    {
        $this->AlertID = ()$val;
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
        $this->ExternalAlertID = ()$val;
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
        $this->ContentType = ()$val;
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
        $this->Text = ()$val;
    }

    /**
     * @param MyMessagesAlertResolutionStatusCode $val
     * @throws Exception
     */
    public function setResolutionStatus($val)
    {
        $this->ResolutionStatus = ()$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setRead($val)
    {
        $this->Read = ()$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setCreationDate($val)
    {
        $this->CreationDate = ()$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setReceiveDate($val)
    {
        $this->ReceiveDate = ()$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setExpirationDate($val)
    {
        $this->ExpirationDate = ()$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setResolutionDate($val)
    {
        $this->ResolutionDate = ()$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setLastReadDate($val)
    {
        $this->LastReadDate = ()$val;
    }

    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        $this->ItemID = ()$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setIsTimedResolution($val)
    {
        $this->IsTimedResolution = ()$val;
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
        $this->ActionURL = ()$val;
    }

    /**
     * @param MyMessagesResponseDetailsType $val
     * @throws Exception
     */
    public function setResponseDetails($val)
    {
        $this->ResponseDetails = ()$val;
    }

    /**
     * @param MyMessagesForwardDetailsType $val
     * @throws Exception
     */
    public function setForwardDetails($val)
    {
        $this->ForwardDetails = ()$val;
    }

    /**
     * @param MyMessagesFolderType $val
     * @throws Exception
     */
    public function setFolder($val)
    {
        $this->Folder = ()$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = ()$val;
    }
}
