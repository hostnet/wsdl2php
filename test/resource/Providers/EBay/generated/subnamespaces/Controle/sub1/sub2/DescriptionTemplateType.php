<?php

namespace Controle\sub1\sub2;
/**
 * DescriptionTemplateType
 * The information for one Theme or one Layout.
 */
class DescriptionTemplateType {
	/**
	 * @var int | Unique identifier for this theme group.
	 */
	public $GroupID;
	/**
	 * @var int | Key you specified in ProductSearchID in the search request to distinguish between query
	 * results. Primarily useful when conducting multiple searches in the same call. If no ProductSearchID
	 * value was specified in the request, returns the array index of the search result (beginning
	 * with 0). Not applicable to GetProductFamilyMembers.
	 */
	public $ID;
	/**
	 * @var \Controle\sub1\sub2\anyURI | The image associated with the department, aisle, or product, if any. All domains should
	 * be associated with an image. However, there may be rare cases when an image is not available.
	 */
	public $ImageURL;
	/**
	 * @var string | Name of the eBay Store. The name is shown at the top of the Store page.
	 */
	public $Name;
	/**
	 * @var string | XML defining the template. Elements you must include in your XML: ThemeTop, ThemeUserCellTop,
	 * ThemeUserContent, ThemeUserCellBottom, ThemeBottom. Not returned for Layouts.
	 */
	public $TemplateXML;
	/**
	 * @var \Controle\sub1\sub2\DescriptionTemplateCodeType | Returns the notification type. Possible values include: AskSellerQuestion, AuctionCheckoutComplete,
	 * BestOffer, CheckoutBuyerRequestTotal, EndOfAuction, Feedback, FixedPriceEndOfTransaction,
	 * FixedPriceTransaction, ItemNotReceived, MyMessages, OutBid, SecondChanceOffer, UPIBuyerResponseDispute,
	 * UPISellerClosedDispute, UPISellerOpenedDispute, and UPISellerRespondedToDispute.
	 */
	public $Type;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}
