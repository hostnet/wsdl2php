<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetMemberMessagesRequestType
 * Retrieves a list of the messages buyers have posted about your active item listings.
 */
class GetMemberMessagesRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $itemid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MessageTypeCodeType | The type of message.
     */
    public $mailmessagetype;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MessageStatusTypeCodeType | The status of the message. Returned if the parent container is returned.
     */
    public $messagestatus;
    /**
     * @var boolean | Specifies if the body should be displayed to the public.
     */
    public $displaytopublic;
    /**
     * @var dateTime | Used as beginning of date range filter.
     */
    public $startcreationtime;
    /**
     * @var dateTime | Used as end of date range filter.
     */
    public $endcreationtime;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaginationType | Pagination instruction that specifies the virtual page of data to return
     * per search request. Default page number is 0 (the first page).            Specify a
     * page number of 0 or a positive value lower            than the approximate number of
     * pages available.
     */
    public $pagination;
    /**
     * @var string | An ID that uniquely identifies the message for a given user to be retrieved. Used for
     * the AskSellerQuestion notification only.
     */
    public $membermessageid;
    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        $this->itemid = (int)$val;
    }

    /**
     * @param MessageTypeCodeType $val
     * @throws Exception
     */
    public function setMailMessageType($val)
    {
        $this->mailmessagetype = (int)$val;
    }

    /**
     * @param MessageStatusTypeCodeType $val
     * @throws Exception
     */
    public function setMessageStatus($val)
    {
        $this->messagestatus = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setDisplayToPublic($val)
    {
        $this->displaytopublic = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setStartCreationTime($val)
    {
        $this->startcreationtime = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setEndCreationTime($val)
    {
        $this->endcreationtime = (int)$val;
    }

    /**
     * @param PaginationType $val
     * @throws Exception
     */
    public function setPagination($val)
    {
        $this->pagination = (int)$val;
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
        $this->membermessageid = (int)$val;
    }
}
