<?php

namespace Controle\sub1\sub2;
/**
 * RemoveFromWatchListResponseType
 * Returns information about the user's My eBay watch list.
 */
class RemoveFromWatchListResponseType extends \Controle\sub1\sub2\AbstractResponseType {
	/**
	 * @var int | (out) The current number of items in the user's watch list (after those specified in the
	 * call request have been removed)
	 */
	public $WatchListCount;
	/**
	 * @var int | (out) The maximum number of items allowed in watch lists. Currently this value is the same for
	 * all sites and all users.
	 */
	public $WatchListMaximum;
}

