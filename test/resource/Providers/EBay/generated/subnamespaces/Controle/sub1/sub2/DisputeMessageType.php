<?php

namespace Controle\sub1\sub2;

/**
 * DisputeMessageType
 * Contains a message posted to a dispute. The message can be posted by the buyer, the seller,
 * or an eBay representative.
 */
class DisputeMessageType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int | An ID that uniquely identifies a message for a given user. <br /><br /> This value is not
	 * the same as the value used for the GetMemberMessages MessageID. Use the GetMemberMessages
	 * value for used as the GetMyMessages ExternalID instead.
	 */
	public $MessageID;
	/**
	 * @var \Controle\sub1\sub2\DisputeMessageSourceCodeType | The party who posted the message: the buyer, the seller, or an eBay representative.
	 */
	public $MessageSource;
	/**
	 * @var dateTime | The date and time the message was created, in GMT.
	 */
	public $MessageCreationTime;
	/**
	 * @var string | The text of the message.
	 */
	public $MessageText;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setMessageID($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->MessageID = $val;
	}

	/**
	 * @param DisputeMessageSourceCodeType $val
	 * @throws \Exception
	 */
	public function setMessageSource($val)
	{
        $this->MessageSource = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setMessageCreationTime($val)
	{
        $this->MessageCreationTime = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setMessageText($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for MessageText');
        }
        $this->MessageText = $val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws \Exception
	 */
	public function setAny($val)
	{
        $this->any = $val;
	}
}
