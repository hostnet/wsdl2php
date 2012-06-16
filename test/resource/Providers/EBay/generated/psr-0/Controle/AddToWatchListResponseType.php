<?php

namespace Controle;
class AddToWatchListResponseType extends \Controle\AbstractResponseType {
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

