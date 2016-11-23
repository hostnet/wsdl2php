<?php

namespace Controle;

/**
 * ExpressDetailsType
 * Item details that are only applicable to listings on Express (not the main eBay site).
 */
class ExpressDetailsType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\anyURI | Large gallery image that appears in the "Grid View" in search results on the Express site. The
	 * longest dimension is 140 pixels. Only returned when ItemDetails is set to Fine.<br> <br> Express
	 * generates the image based on pictures that the seller includes in the listing. For details
	 * about Express listing criteria, see the eBay Web Services Guide link below.<br> <br> If
	 * the item was listed in an eBay category that does not require pictures for Express (like
	 * Tickets), a generic image may be returned instead.
	 */
	public $ExpressLargeImage;
	/**
	 * @var \Controle\anyURI | Small gallery image that appears in the "List View" in search results on the Express site. The
	 * longest dimension is 96 pixels. Only returned when ItemDetails is set to Fine.<br> <br> Express
	 * generates the image based on pictures that the seller includes in the listing. For details
	 * about Express listing criteria, see the eBay Web Services Guide link below.<br> <br> If
	 * the item was listed in an eBay category that does not require pictures for Express (like
	 * Tickets), a generic image may be returned instead.
	 */
	public $ExpressSmallImage;
	/**
	 * @var string | The item condition, if any. On Express US, this is often a value like "New", "Used", or
	 * "Refurbished", but the exact value can vary based on the Item Condition data that the seller
	 * used in the listing.<br> For example, in some eBay categories, the condition can have a
	 * value like "New: With Tags" instead. (At the time of this writing, GetSearchResultsExpress
	 * mapped all conditions to "New" and "Used". However, this could change in the future.) By
	 * default, only new items (or the equivalent) are returned from GetSearchResultsExpress. Use
	 * Condition in the request to include used and refurbished items (or the equivalent) as well. Only
	 * returned when ItemDetails is set to Fine.<br> <br> Not applicable to calls that browse
	 * or search items on the main eBay site.
	 */
	public $Condition;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param anyURI $val
	 * @throws Exception
	 */
	public function setExpressLargeImage($val)
	{
        $this->ExpressLargeImage = (int)$val;
	}

	/**
	 * @param anyURI $val
	 * @throws Exception
	 */
	public function setExpressSmallImage($val)
	{
        $this->ExpressSmallImage = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCondition($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Condition');
        }
        $this->Condition = (int)$val;
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
