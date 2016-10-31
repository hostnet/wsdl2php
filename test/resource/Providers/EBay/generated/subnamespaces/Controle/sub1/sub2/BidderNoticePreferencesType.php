<?php

namespace Controle\sub1\sub2;

/**
 * BidderNoticePreferencesType
 * Contains a seller's preferences for receiving bidder notices.
 */
class BidderNoticePreferencesType
{
	/**
	 * @var boolean | If true, sends the seller a notice containing the contact information for unsuccessful
	 *  bidders.
	 */
	public $unsuccessfulbiddernoticeincludemyitems;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setUnsuccessfulBidderNoticeIncludeMyItems($val)
	{
        $this->unsuccessfulbiddernoticeincludemyitems = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (int)$val;
	}
}
