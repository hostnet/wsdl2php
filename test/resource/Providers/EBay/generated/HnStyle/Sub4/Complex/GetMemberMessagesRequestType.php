<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetMemberMessagesRequestType
 * Retrieves a list of the messages buyers have posted about your active item listings.
 */
class GetMemberMessagesRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $ItemID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MessageTypeCodeType | The type of message.
     */
    public $MailMessageType;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MessageStatusTypeCodeType | The status of the message. Returned if the parent container is returned.
     */
    public $MessageStatus;
    /**
     * @var boolean | Specifies if the body should be displayed to the public.
     */
    public $DisplayToPublic;
    /**
     * @var dateTime | Used as beginning of date range filter.
     */
    public $StartCreationTime;
    /**
     * @var dateTime | Used as end of date range filter.
     */
    public $EndCreationTime;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaginationType | Pagination instruction that specifies the virtual page of data to return
     * per search request. Default page number is 0 (the first page).            Specify a
     * page number of 0 or a positive value lower            than the approximate number of
     * pages available.
     */
    public $Pagination;
    /**
     * @var string | An ID that uniquely identifies the message for a given user to be retrieved. Used for
     * the AskSellerQuestion notification only.
     */
    public $MemberMessageID;
    // @codingStandardsIgnoreEnd

    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        $this->ItemID = $val;
    }

    /**
     * @param MessageTypeCodeType $val
     * @throws Exception
     */
    public function setMailMessageType($val)
    {
        $this->MailMessageType = $val;
    }

    /**
     * @param MessageStatusTypeCodeType $val
     * @throws Exception
     */
    public function setMessageStatus($val)
    {
        $this->MessageStatus = $val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setDisplayToPublic($val)
    {
        $this->DisplayToPublic = $val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setStartCreationTime($val)
    {
        $this->StartCreationTime = $val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setEndCreationTime($val)
    {
        $this->EndCreationTime = $val;
    }

    /**
     * @param PaginationType $val
     * @throws Exception
     */
    public function setPagination($val)
    {
        $this->Pagination = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setMemberMessageID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for MemberMessageID');
        }
        $this->MemberMessageID = $val;
    }
}
