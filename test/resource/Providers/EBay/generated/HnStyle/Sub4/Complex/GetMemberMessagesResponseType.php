<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetMemberMessagesResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MemberMessageExchangeArrayType | Holds the content of the message.
     */
    public $MemberMessage;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaginationResultType | Provides information about the list of transactions, including number of pages and number
     * of entries.
     */
    public $PaginationResult;
    /**
     * @var boolean | Indicates whether there are additional Want It Now posts that meet the search criteria.
     */
    public $HasMoreItems;
    // @codingStandardsIgnoreEnd

    /**
     * @param MemberMessageExchangeArrayType $val
     * @throws Exception
     */
    public function setMemberMessage($val)
    {
        $this->MemberMessage = (MemberMessageExchangeArrayType)$val;
    }

    /**
     * @param PaginationResultType $val
     * @throws Exception
     */
    public function setPaginationResult($val)
    {
        $this->PaginationResult = (PaginationResultType)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setHasMoreItems($val)
    {
        $this->HasMoreItems = (boolean)$val;
    }
}
