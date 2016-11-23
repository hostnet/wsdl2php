<?php

namespace Controle;

/**
 * MemberMessageType
 * Container for individual message information.
 */
class MemberMessageType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\MessageTypeCodeType | The type of message being retrieved. Note that some message types can only be created
     * via the eBay Web site.
     */
    public $MessageType;
    /**
     * @var \Controle\QuestionTypeCodeType | The context of the question (e.g. Shipping, General).
     */
    public $QuestionType;
    /**
     * @var boolean | Specifies whether or not to email a copy of the message to the sender. If omitted, this
     * defaults to whatever the user set in preferences.
     */
    public $EmailCopyToSender;
    /**
     * @var boolean | Specifies whether or not to hide sender's email address from the recipient. If omitted,
     * this defaults to whatever the user set in preferences--or on site policy, which determines
     * whether or not this field is recognized.
     */
    public $HideSendersEmailAddress;
    /**
     * @var boolean | Specifies if the body should be displayed to the public.
     */
    public $DisplayToPublic;
    /**
     * @var string | The eBay user ID of the person who asked the question or sent the message.
     */
    public $SenderID;
    /**
     * @var string | The email address of the person who asked the question or sent the message. Returned
     * for MessageType = AskSellerQuestion and by the AskSellerQuestion notification.
     */
    public $SenderEmail;
    /**
     * @var string | Recipient's eBay user ID. For AddMemberMessagesAAQToBidder, must be the seller of an item,
     * that item's bidder, or a user who has made an offer on that item via Best Offer.
     */
    public $RecipientID;
    /**
     * @var string | The subject of the message.
     */
    public $Subject;
    /**
     * @var string | Message content.
     */
    public $Body;
    /**
     * @var string | An ID that uniquely identifies a message for a given user. <br /><br /> This value is
     * not the same as the value used for the GetMemberMessages MessageID. Use the GetMemberMessages
     * value for used as the GetMyMessages ExternalID instead.
     */
    public $MessageID;
    /**
     * @var string | ID number of the question this message is responding to.
     */
    public $ParentMessageID;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param MessageTypeCodeType $val
     * @throws Exception
     */
    public function setMessageType($val)
    {
        $this->MessageType = (int)$val;
    }

    /**
     * @param QuestionTypeCodeType $val
     * @throws Exception
     */
    public function setQuestionType($val)
    {
        $this->QuestionType = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setEmailCopyToSender($val)
    {
        $this->EmailCopyToSender = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setHideSendersEmailAddress($val)
    {
        $this->HideSendersEmailAddress = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setDisplayToPublic($val)
    {
        $this->DisplayToPublic = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSenderID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SenderID');
        }
        $this->SenderID = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSenderEmail($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SenderEmail');
        }
        $this->SenderEmail = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setRecipientID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for RecipientID');
        }
        $this->RecipientID = (int)$val;
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
    public function setBody($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Body');
        }
        $this->Body = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setMessageID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for MessageID');
        }
        $this->MessageID = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setParentMessageID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ParentMessageID');
        }
        $this->ParentMessageID = (int)$val;
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
