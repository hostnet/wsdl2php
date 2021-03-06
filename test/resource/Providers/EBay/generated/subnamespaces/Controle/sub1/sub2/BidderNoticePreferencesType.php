<?php

namespace Controle\sub1\sub2;

/**
 * BidderNoticePreferencesType
 * Contains a seller's preferences for receiving bidder notices.
 */
class BidderNoticePreferencesType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var boolean | If true, sends the seller a notice containing the contact information for unsuccessful
	 *  bidders.
	 */
	public $UnsuccessfulBidderNoticeIncludeMyItems;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setUnsuccessfulBidderNoticeIncludeMyItems($val)
	{
        $this->UnsuccessfulBidderNoticeIncludeMyItems = $val;
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
