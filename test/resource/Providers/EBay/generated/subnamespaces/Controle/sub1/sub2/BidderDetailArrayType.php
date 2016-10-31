<?php

namespace Controle\sub1\sub2;
/**
 * BidderDetailArrayType
 * A collection of Bidder Detail.
 */
class BidderDetailArrayType {
	/**
	 * @var \Controle\sub1\sub2\BidderDetailType | Details about a Live Auctions bidder. Returned if at least one bidder has requested approval.
	 */
	public $BidderDetail;
	/**
	 * @param BidderDetailType $val
	 * @throws Exception
	 */
	public function setBidderDetail($val) {
		
		$this->BidderDetail = (int)$val;
	}

}

