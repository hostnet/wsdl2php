<?php

namespace Controle\sub1\sub2;
class SearchDetailsType {
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
	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setBuyItNowEnabled($val) {
		
		$this->BuyItNowEnabled = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setPicture($val) {
		
		$this->Picture = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setRecentListing($val) {
		
		$this->RecentListing = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val) {
		
		$this->any = (int)$val;
	}

}

