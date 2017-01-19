<?php

namespace Controle;

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
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setBuyItNowEnabled($val)
	{
        $this->BuyItNowEnabled = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setPicture($val)
	{
        $this->Picture = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setRecentListing($val)
	{
        $this->RecentListing = $val;
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
