<?php

namespace Controle;

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
	 * @var \Controle\MyMessagesAlertIDType | An ID that uniquely identifies an alert for a given user.
	 */
	public $AlertID;
	/**
	 * @var string | An ID used by an external application to uniquely identify an alert.
	 */
	public $ExternalAlertID;
	/**
	 * @var string | The content type of the body text. The three acceptable values are "TEXT", "HTML",  and
	 * "XML" (case sensitive).
	 */
	public $ContentType;
	/**
	 * @var string | Suggestion for a different spelling of the search term or terms. The suggestions are given
	 * in Text tags  and the suggestion for the first word is given before the suggestion for
	 * subsequent words.  Suggestions are based on correctly-spelled terms in items, so suggestions
	 * vary over time and depend on   whether a word or word combination is in one or more items.
	 */
	public $Text;
	/**
	 * @var \Controle\MyMessagesAlertResolutionStatusCode | Whether or not an alert was resolved, and how.
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
	 * @var dateTime | The date and time that a message was received by My Messages and stored in a database for
	 * the recipient.
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
	 * @var \Controle\ItemIDType | The item ID of the item reported for infringment.
	 */
	public $ItemID;
	/**
	 * @var boolean | Indicates whether or not a time-delayed resolution is applicable for an alert.
	 */
	public $IsTimedResolution;
	/**
	 * @var string | A URL that the recipient must visit to resolve an alert. May be returned as an empty tag
	 * if there is no applicable URL.
	 */
	public $ActionURL;
	/**
	 * @var \Controle\MyMessagesResponseDetailsType | Details relating to the response to an alert or message.
	 */
	public $ResponseDetails;
	/**
	 * @var \Controle\MyMessagesForwardDetailsType | Details relating to the forwarding of an alert or message. Only returned if the alert or
	 * message is forwarded.
	 */
	public $ForwardDetails;
	/**
	 * @var \Controle\MyMessagesFolderType | The folder requested in the album.
	 */
	public $Folder;
	/**
	 * @var \Controle\<anyXML>
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
        $this->Sender = (int)$val;
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
        $this->RecipientUserID = (int)$val;
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
        $this->Subject = (int)$val;
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
        $this->Priority = (int)$val;
	}

	/**
	 * @param MyMessagesAlertIDType $val
	 * @throws Exception
	 */
	public function setAlertID($val)
	{
        $this->AlertID = (int)$val;
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
        $this->ExternalAlertID = (int)$val;
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
        $this->ContentType = (int)$val;
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
        $this->Text = (int)$val;
	}

	/**
	 * @param MyMessagesAlertResolutionStatusCode $val
	 * @throws Exception
	 */
	public function setResolutionStatus($val)
	{
        $this->ResolutionStatus = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setRead($val)
	{
        $this->Read = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setCreationDate($val)
	{
        $this->CreationDate = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setReceiveDate($val)
	{
        $this->ReceiveDate = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setExpirationDate($val)
	{
        $this->ExpirationDate = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setResolutionDate($val)
	{
        $this->ResolutionDate = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setLastReadDate($val)
	{
        $this->LastReadDate = (int)$val;
	}

	/**
	 * @param ItemIDType $val
	 * @throws Exception
	 */
	public function setItemID($val)
	{
        $this->ItemID = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setIsTimedResolution($val)
	{
        $this->IsTimedResolution = (int)$val;
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
        $this->ActionURL = (int)$val;
	}

	/**
	 * @param MyMessagesResponseDetailsType $val
	 * @throws Exception
	 */
	public function setResponseDetails($val)
	{
        $this->ResponseDetails = (int)$val;
	}

	/**
	 * @param MyMessagesForwardDetailsType $val
	 * @throws Exception
	 */
	public function setForwardDetails($val)
	{
        $this->ForwardDetails = (int)$val;
	}

	/**
	 * @param MyMessagesFolderType $val
	 * @throws Exception
	 */
	public function setFolder($val)
	{
        $this->Folder = (int)$val;
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
