<?php

namespace Controle;
class StoreSubscriptionType {
	/**
	 * @var \Controle\StoreSubscriptionLevelCodeType | Store subscription level.
	 */
	public $Level;
	/**
	 * @var \Controle\AmountType | Monthly fee for the Store subscription level.
	 */
	public $Fee;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
}

