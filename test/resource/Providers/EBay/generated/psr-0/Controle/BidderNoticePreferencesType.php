<?php

namespace Controle;

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
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setUnsuccessfulBidderNoticeIncludeMyItems($val)
	{
        $this->UnsuccessfulBidderNoticeIncludeMyItems = ()$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = ()$val;
	}
}
