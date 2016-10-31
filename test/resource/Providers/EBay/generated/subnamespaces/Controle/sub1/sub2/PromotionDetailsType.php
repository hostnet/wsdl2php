<?php

namespace Controle\sub1\sub2;
/**
 * PromotionDetailsType
 * Contains information about a promoted item.
 */
class PromotionDetailsType {
	/**
	 * @var \Controle\sub1\sub2\AmountType | The price of the cross-promoted item in the currency of the site upon which the item is
	 * listed. Output only. If the item is listed on a site different from the site specified
	 * in the request, then ConvertedPromotionPrice is also returned.
	 */
	public $PromotionPrice;
	/**
	 * @var \Controle\sub1\sub2\PromotionItemPriceTypeCodeType | The listing type for the promoted item and how the item price is used.
	 */
	public $PromotionPriceType;
	/**
	 * @var int | Number of bids placed so far against the item. Only applicable to competitive-bidding listings
	 * (Chinese and Dutch auctions).
	 */
	public $BidCount;
	/**
	 * @var \Controle\sub1\sub2\AmountType | The converted price of the cross-promoted item. Output only. Emitted only when the item
	 * is listed on a site other than the site specified in the request. Returns the price in
	 * the currency of the site specified in the request.
	 */
	public $ConvertedPromotionPrice;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setPromotionPrice($val) {
		
		$this->PromotionPrice = (int)$val;
	}

	/**
	 * @param PromotionItemPriceTypeCodeType $val
	 * @throws Exception
	 */
	public function setPromotionPriceType($val) {
		
		$this->PromotionPriceType = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setBidCount($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->BidCount = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setConvertedPromotionPrice($val) {
		
		$this->ConvertedPromotionPrice = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val) {
		
		$this->any = (int)$val;
	}

}

