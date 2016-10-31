<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetMemberMessagesResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MemberMessageExchangeArrayType | Holds the content of the message.
     */
    public $membermessage;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaginationResultType | Provides information about the list of transactions, including number of pages and number
     * of entries.
     */
    public $paginationresult;
    /**
     * @var boolean | Indicates whether there are additional Want It Now posts that meet the search criteria.
     */
    public $hasmoreitems;
    /**
     * @param MemberMessageExchangeArrayType $val
     * @throws Exception
     */
    public function setMemberMessage($val)
    {
        $this->membermessage = (int)$val;
    }

    /**
     * @param PaginationResultType $val
     * @throws Exception
     */
    public function setPaginationResult($val)
    {
        $this->paginationresult = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setHasMoreItems($val)
    {
        $this->hasmoreitems = (int)$val;
    }
}
