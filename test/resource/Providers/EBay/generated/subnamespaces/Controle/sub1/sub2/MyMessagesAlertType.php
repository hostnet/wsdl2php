<?php

namespace Controle\sub1\sub2;
/**
 * MyMessagesAlertType
 * Returns an alert header and full alert information.
 */
class MyMessagesAlertType {
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
	 * @var \Controle\sub1\sub2\MyMessagesAlertIDType | An ID that uniquely identifies an alert for a given user.
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
	 * @var \Controle\sub1\sub2\MyMessagesAlertResolutionStatusCode | Whether or not an alert was resolved, and how.
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
	 * @var \Controle\sub1\sub2\ItemIDType | The item ID of the item reported for infringment.
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
}

