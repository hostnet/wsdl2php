<?php

namespace Controle\sub1\sub2;
/**
 * ListingTipType
 * (out) A tip on improving a listing's details. Tips are returned from the Listing Analyzer
 * engine.
 */
class ListingTipType {
	/**
	 * @var string | Identifier for the tip. Primarily for internal use. This value may change over time.
	 */
	public $ListingTipID;
	/**
	 * @var int | A number ranging from 0 to 10000 (inclusive), with 10000 having the highest priority.
	 */
	public $Priority;
	/**
	 * @var \Controle\sub1\sub2\ListingTipMessageType | Contains the data for one message.
	 */
	public $Message;
	/**
	 * @var \Controle\sub1\sub2\ListingTipFieldType | The name of the field that is being modified. Use only first-level properties. The first
	 * letter of each node in the field is case insensitive, so item.startPrice is the same as
	 * Item.StartPrice. In RelistItem, this is required if you are also modifying fields of the
	 * item that you are relisting.
	 */
	public $Field;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

