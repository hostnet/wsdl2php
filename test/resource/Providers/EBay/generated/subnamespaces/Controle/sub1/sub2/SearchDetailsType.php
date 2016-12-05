<?php

namespace Controle\sub1\sub2;

class SearchDetailsType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var boolean | Indicates whether a listing uses the Buy It Now feature.
	 */
	public $BuyItNowEnabled;
	/**
	 * @var boolean | Indicates whether a listing has an image associated with it.
	 */
	public $Picture;
	/**
	 * @var boolean | Indicates whether a listing is no more than one day old.
	 */
	public $RecentListing;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setBuyItNowEnabled($val)
	{
        $this->BuyItNowEnabled = (boolean)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setPicture($val)
	{
        $this->Picture = (boolean)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setRecentListing($val)
	{
        $this->RecentListing = (boolean)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (<anyXML>)$val;
	}
}
