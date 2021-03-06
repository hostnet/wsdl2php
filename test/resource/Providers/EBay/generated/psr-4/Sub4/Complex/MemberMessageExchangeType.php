<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * MemberMessageExchangeType
 * Container for message metadata.
 */
class MemberMessageExchangeType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemType | Information about the item that spawned the transaction. It is a purchase from this
     * item's listing that the transaction represents. To remove a property from an item, specify
     * it in ModifyType as a changed property, but do not give it a value in Item. Also applicable
     * to Half.com (for GetOrders).
     */
    public $Item;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MemberMessageType | Contains all the information about the question being asked.  Returned if the parent
     * container is returned.
     */
    public $Question;
    /**
     * @var string | An answer to the question. Returned if the parent container is returned.
     */
    public $Response;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MessageStatusTypeCodeType | The status of the message. Returned if the parent container is returned.
     */
    public $MessageStatus;
    /**
     * @var dateTime | The date and time that a message was created by the sender.
     */
    public $CreationDate;
    /**
     * @var dateTime | Date the message was last modified. Returned if the parent container is returned.
     */
    public $LastModifiedDate;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param ItemType $val
     * @throws \Exception
     */
    public function setItem($val)
    {
        $this->Item = $val;
    }

    /**
     * @param MemberMessageType $val
     * @throws \Exception
     */
    public function setQuestion($val)
    {
        $this->Question = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setResponse($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Response');
        }
        $this->Response = $val;
    }

    /**
     * @param MessageStatusTypeCodeType $val
     * @throws \Exception
     */
    public function setMessageStatus($val)
    {
        $this->MessageStatus = $val;
    }

    /**
     * @param dateTime $val
     * @throws \Exception
     */
    public function setCreationDate($val)
    {
        $this->CreationDate = $val;
    }

    /**
     * @param dateTime $val
     * @throws \Exception
     */
    public function setLastModifiedDate($val)
    {
        $this->LastModifiedDate = $val;
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
