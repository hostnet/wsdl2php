<?php

namespace Controle;
/**
 * MyMessagesMessageType
 * Contains the message information for each message specified in MessageIDs. The amount and
 * type of information returned varies based on the requested detail level.
 */
class MyMessagesMessageType {
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
     * @var \Controle\MyMessagesMessageIDType | An ID that uniquely identifies a message for a given user. <br /><br /> This value is
     * not the same as the value used for the GetMemberMessages MessageID. Use the GetMemberMessages
     * value for used as the GetMyMessages ExternalID instead.
     */
    public $MessageID;
    /**
     * @var string | An ID used by an external application to uniquely identify a message. <br /><br /> This
     * value is equivalent to the value used for MessageID in GetMemberMessages.
     */
    public $ExternalMessageID;
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
     * @var dateTime | The date and time that a message was received by My Messages and stored in a database
     * for the recipient.
     */
    public $ReceiveDate;
    /**
     * @var dateTime | The date and time at which a message expires.
     */
    public $ExpirationDate;
    /**
     * @var \Controle\ItemIDType | The item ID of the item reported for infringment.
     */
    public $ItemID;
    /**
     * @var \Controle\MyMessagesResponseDetailsType | Details relating to the response to an alert or message.
     */
    public $ResponseDetails;
    /**
     * @var \Controle\MyMessagesForwardDetailsType | Details relating to the forwarding of an alert or message. Only returned if the alert
     * or message is forwarded.
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
}

