<?php

namespace Controle\sub1\sub2;

class StoreSubscriptionType
{
	// @codingStandardsIgnoreStart
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
	// @codingStandardsIgnoreEnd

	/**
	 * @param StoreSubscriptionLevelCodeType $val
	 * @throws Exception
	 */
	public function setLevel($val)
	{
        $this->Level = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setFee($val)
	{
        $this->Fee = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (int)$val;
	}
}
