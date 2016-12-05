<?php

namespace Controle\sub1\sub2;

/**
 * MyMessagesMessageType
 * Contains the message information for each message specified in MessageIDs. The amount and
 * type of information returned varies based on the requested detail level.
 */
class MyMessagesMessageType
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
	 * @var string | The displayable name of the user or eBay application to which the message is sent. Only returned
	 * for M2M, and if a value exists.
	 */
	public $SendToName;
	/**
	 * @var string | The subject of the message.
	 */
	public $Subject;
	/**
	 * @var \Controle\sub1\sub2\MyMessagesMessageIDType | An ID that uniquely identifies a message for a given user. <br /><br /> This value is not
	 * the same as the value used for the GetMemberMessages MessageID. Use the GetMemberMessages
	 * value for used as the GetMyMessages ExternalID instead.
	 */
	public $MessageID;
	/**
	 * @var string | An ID used by an external application to uniquely identify a message. <br /><br /> This
	 * value is equivalent to the value used for MessageID in GetMemberMessages.
	 */
	public $ExternalMessageID;
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
	 * @var boolean | Whether or not a message has been flagged.
	 */
	public $Flagged;
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
	 * @var \Controle\sub1\sub2\ItemIDType | The item ID of the item reported for infringment.
	 */
	public $ItemID;
	/**
	 * @var \Controle\sub1\sub2\MyMessagesResponseDetailsType | Details relating to the response to an alert or message.
	 */
	public $ResponseDetails;
	/**
	 * @var \Controle\sub1\sub2\MyMessagesForwardDetailsType | Details relating to the forwarding of an alert or message. Only returned if the alert or
	 * message is forwarded.
	 */
	public $ForwardDetails;
	/**
	 * @var \Controle\sub1\sub2\MyMessagesFolderType | The folder requested in the album.
	 */
	public $Folder;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
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
        $this->Sender = (string)$val;
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
        $this->RecipientUserID = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSendToName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SendToName');
        }
        $this->SendToName = (string)$val;
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
        $this->Subject = (string)$val;
	}

	/**
	 * @param MyMessagesMessageIDType $val
	 * @throws Exception
	 */
	public function setMessageID($val)
	{
        $this->MessageID = (MyMessagesMessageIDType)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setExternalMessageID($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ExternalMessageID');
        }
        $this->ExternalMessageID = (string)$val;
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
        $this->ContentType = (string)$val;
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
        $this->Text = (string)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setFlagged($val)
	{
        $this->Flagged = (boolean)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setRead($val)
	{
        $this->Read = (boolean)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setCreationDate($val)
	{
        $this->CreationDate = (dateTime)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setReceiveDate($val)
	{
        $this->ReceiveDate = (dateTime)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setExpirationDate($val)
	{
        $this->ExpirationDate = (dateTime)$val;
	}

	/**
	 * @param ItemIDType $val
	 * @throws Exception
	 */
	public function setItemID($val)
	{
        $this->ItemID = (ItemIDType)$val;
	}

	/**
	 * @param MyMessagesResponseDetailsType $val
	 * @throws Exception
	 */
	public function setResponseDetails($val)
	{
        $this->ResponseDetails = (MyMessagesResponseDetailsType)$val;
	}

	/**
	 * @param MyMessagesForwardDetailsType $val
	 * @throws Exception
	 */
	public function setForwardDetails($val)
	{
        $this->ForwardDetails = (MyMessagesForwardDetailsType)$val;
	}

	/**
	 * @param MyMessagesFolderType $val
	 * @throws Exception
	 */
	public function setFolder($val)
	{
        $this->Folder = (MyMessagesFolderType)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (<anyXML>)$val;
	}
}
