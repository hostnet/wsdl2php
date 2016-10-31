<?php

namespace Controle;
class ExtendedProductFinderIDType {
	/**
	 * @var int | Numeric identifier for a buy-side product finder. A product finder defines how to
	 *        search for Item Specifics in listings (e.g., how to search against a particular
	 * shoe size).            See the eBay Web Services guide for details about product finders.
	 *            You need to specify a product finder ID when you are searching against a listing's
	 *             Item Specifics (i.e., when you use SearchAttributes). A few categories, such
	 * as US Event Tickets and US eBay Motors, can also return a subset of Item Specifics (e.g.,
	 * the event venue, section, and row for a ticket listing) in the search results. To retrieve
	 * this data, you must specify the product finder ID, and also specify a detail level of ItemReturnAttributes
	 * or ReturnAll. Use GetProductFinder to determine valid product finder IDs.
	 */
	public $ProductFinderID;
	/**
	 * @var boolean | If true, the product finder can be used as input to GetSearchResults to search for listings
	 * with Item Specifics on the eBay site. If false or not present, the product finder can be
	 * used as input to GetProductSearchResults to search for catalog data (Pre-filled Item Information) that
	 * a seller might want to include in a listing.
	 */
	public $ProductFinderBuySide;
	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setProductFinderID($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->ProductFinderID = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setProductFinderBuySide($val) {
		
		$this->ProductFinderBuySide = (int)$val;
	}

}

