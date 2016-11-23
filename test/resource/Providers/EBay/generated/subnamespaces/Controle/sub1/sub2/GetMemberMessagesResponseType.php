<?php

namespace Controle\sub1\sub2;

class GetMemberMessagesResponseType extends
 \Controle\sub1\sub2\AbstractResponseType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\MemberMessageExchangeArrayType | Holds the content of the message.
	 */
	public $MemberMessage;
	/**
	 * @var \Controle\sub1\sub2\PaginationResultType | Provides information about the list of transactions, including number of pages and number
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
        $this->MemberMessage = (int)$val;
	}

	/**
	 * @param PaginationResultType $val
	 * @throws Exception
	 */
	public function setPaginationResult($val)
	{
        $this->PaginationResult = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setHasMoreItems($val)
	{
        $this->HasMoreItems = (int)$val;
	}
}
