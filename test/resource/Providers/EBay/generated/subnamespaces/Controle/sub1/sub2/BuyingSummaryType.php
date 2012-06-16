<?php

namespace Controle\sub1\sub2;
class BuyingSummaryType {
	/**
	 * @var int | The number of items the user has bid on.
	 */
	public $BiddingCount;
	/**
	 * @var int | The number of items the user has bid on and is winning, but that have not yet ended.
	 */
	public $WinningCount;
	/**
	 * @var \Controle\sub1\sub2\AmountType | The total cost of items the user is presently winning.
	 */
	public $TotalWinningCost;
	/**
	 * @var int | The number of items the user has bid on and won.
	 */
	public $WonCount;
	/**
	 * @var \Controle\sub1\sub2\AmountType | The total cost of items the user has bid on and won.
	 */
	public $TotalWonCost;
	/**
	 * @var int | The time period for which won items are displayed. Default is 31 days.
	 */
	public $WonDurationInDays;
	/**
	 * @var int | The number of items the user has made best offers on.
	 */
	public $BestOfferCount;
}

