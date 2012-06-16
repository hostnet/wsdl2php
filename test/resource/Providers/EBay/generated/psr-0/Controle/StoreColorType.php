<?php

namespace Controle;
/**
 * StoreColorType
 * Store color set.
 */
class StoreColorType {
	/**
	 * @var string | Primary color for the Store. Specified in 6-digit Hex format. For example: F6F6C9
	 */
	public $Primary;
	/**
	 * @var string | Secondary color for the Store. Specified in 6-digit Hex format. For example: F6F6C9
	 */
	public $Secondary;
	/**
	 * @var string | Accent color for the Store. Specified in 6-digit Hex format. For example: F6F6C9
	 */
	public $Accent;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
}

