<?php

namespace Controle\sub1\sub2;
class ProductInfoType {
	/**
	 * @var \Controle\sub1\sub2\AmountType | The average start price (minimum bid), if any, of completed auction items that were listed
	 *            with Pre-filled Item Information from this product.
	 */
	public $AverageStartPrice;
	/**
	 * @var \Controle\sub1\sub2\AmountType | The average sold price (winning bid, Buy It Now price, or fixed price), if any, of completed
	 * items that were listed with Pre-filled Item Information from this product.
	 */
	public $AverageSoldPrice;
	/**
	 * @var string | Title of a Want It Now post.
	 */
	public $Title;
	/**
	 * @var string
	 */
	public $productInfoID;
}

