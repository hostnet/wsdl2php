<?php

namespace Controle\sub1\sub2;
class StoreSubscriptionType {
	/**
	 * @var \Controle\sub1\sub2\StoreSubscriptionLevelCodeType | Store subscription level.
	 */
	public $Level;
	/**
	 * @var \Controle\sub1\sub2\AmountType | Monthly fee for the Store subscription level.
	 */
	public $Fee;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

