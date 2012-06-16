<?php

namespace Controle;
/**
 * PromotionDetailsType
 * Contains information about a promoted item.
 */
class PromotionDetailsType {
	/**
	 * @var \Controle\AmountType | The price of the cross-promoted item in the currency of the site upon which the item is
	 * listed. Output only. If the item is listed on a site different from the site specified
	 * in the request, then ConvertedPromotionPrice is also returned.
	 */
	public $PromotionPrice;
	/**
	 * @var \Controle\PromotionItemPriceTypeCodeType | The listing type for the promoted item and how the item price is used.
	 */
	public $PromotionPriceType;
	/**
	 * @var int | Number of bids placed so far against the item. Only applicable to competitive-bidding listings
	 * (Chinese and Dutch auctions).
	 */
	public $BidCount;
	/**
	 * @var \Controle\AmountType | The converted price of the cross-promoted item. Output only. Emitted only when the item
	 * is listed on a site other than the site specified in the request. Returns the price in
	 * the currency of the site specified in the request.
	 */
	public $ConvertedPromotionPrice;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
}

