<?php

namespace Controle;

/**
 * GetBidderListResponseType
 * Response to GetBidderListRequest.
 */
class GetBidderListResponseType extends
 \Controle\AbstractResponseType
{
	/**
	 * @var \Controle\UserType | Data for one eBay bidder.
	 */
	public $bidder;
	/**
	 * @var \Controle\ItemArrayType | Array of items the bidder has bid on, has won or has lost.
	 */
	public $biditemarray;
	/**
	 * @param UserType $val
	 * @throws Exception
	 */
	public function setBidder($val)
	{
        $this->bidder = (int)$val;
	}

	/**
	 * @param ItemArrayType $val
	 * @throws Exception
	 */
	public function setBidItemArray($val)
	{
        $this->biditemarray = (int)$val;
	}
}
