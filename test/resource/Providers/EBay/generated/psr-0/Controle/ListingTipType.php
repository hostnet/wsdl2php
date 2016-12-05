<?php

namespace Controle;

/**
 * ListingTipType
 * (out) A tip on improving a listing's details. Tips are returned from the Listing Analyzer
 * engine.
 */
class ListingTipType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string | Identifier for the tip. Primarily for internal use. This value may change over time.
	 */
	public $ListingTipID;
	/**
	 * @var int | A number ranging from 0 to 10000 (inclusive), with 10000 having the highest priority.
	 */
	public $Priority;
	/**
	 * @var \Controle\ListingTipMessageType | Contains the data for one message.
	 */
	public $Message;
	/**
	 * @var \Controle\ListingTipFieldType | The name of the field that is being modified. Use only first-level properties. The first
	 * letter of each node in the field is case insensitive, so item.startPrice is the same as
	 * Item.StartPrice. In RelistItem, this is required if you are also modifying fields of the
	 * item that you are relisting.
	 */
	public $Field;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setListingTipID($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ListingTipID');
        }
        $this->ListingTipID = ()$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setPriority($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Priority = ()$val;
	}

	/**
	 * @param ListingTipMessageType $val
	 * @throws Exception
	 */
	public function setMessage($val)
	{
        $this->Message = ()$val;
	}

	/**
	 * @param ListingTipFieldType $val
	 * @throws Exception
	 */
	public function setField($val)
	{
        $this->Field = ()$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = ()$val;
	}
}
