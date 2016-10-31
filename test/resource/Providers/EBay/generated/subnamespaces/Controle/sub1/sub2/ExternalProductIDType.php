<?php

namespace Controle\sub1\sub2;
/**
 * ExternalProductIDType
 * Contains an ISBN value, EAN value, UPC value, ticket keywords, or eBay catalog product ID,
 * plus other meta-data. For event tickets, this type can contain a set of keywords that uniquely
 * identify the product. Only applicable for certain categories that support Pre-filled Item Information.
 * For items listed to eBay.com, either ExternalProductID or Item.ProductListingDetails can
 * be specified in listing use cases (AddItem or GetItemRecommendations), but do not specify
 * both in the same requst. Either ExternalProductID or ProductID can be specified in a GetSearchResults
 * request, but not both. See the Developer's Guide for information on the categories that
 * support usage of this field in listing and searching use cases. Not applicable when revising
 * and relisting items. For Half.com listing use cases, contains an ISBN, UPC, or EAN value
 * plus other meta-data.
 */
class ExternalProductIDType {
	/**
	 * @var string | Specifies the value for the property.
	 */
	public $Value;
	/**
	 * @var boolean | Applicable for listing use cases only (not buy-side searching). Indicates what eBay should
	 * do if more than one product matches the value passed in Value. Only takes effect when more
	 * than one match is found. If true, the response should include an error and all matching
	 * product IDs. If false, the response should include an error but should not return the matching
	 * product IDs. This field is also applicable when listing Half.com items.
	 */
	public $ReturnSearchResultOnDuplicates;
	/**
	 * @var \Controle\sub1\sub2\ExternalProductCodeType | Returns the notification type. Possible values include: AskSellerQuestion, AuctionCheckoutComplete,
	 * BestOffer, CheckoutBuyerRequestTotal, EndOfAuction, Feedback, FixedPriceEndOfTransaction,
	 * FixedPriceTransaction, ItemNotReceived, MyMessages, OutBid, SecondChanceOffer, UPIBuyerResponseDispute,
	 * UPISellerClosedDispute, UPISellerOpenedDispute, and UPISellerRespondedToDispute.
	 */
	public $Type;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setValue($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Value');
		$this->Value = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setReturnSearchResultOnDuplicates($val) {
		
		$this->ReturnSearchResultOnDuplicates = (int)$val;
	}

	/**
	 * @param ExternalProductCodeType $val
	 * @throws Exception
	 */
	public function setType($val) {
		
		$this->Type = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val) {
		
		$this->any = (int)$val;
	}

}

