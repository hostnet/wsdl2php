<?php

namespace Controle\sub1\sub2;

class StoreSubscriptionType
{
	/**
	 * @var \Controle\sub1\sub2\StoreSubscriptionLevelCodeType | Store subscription level.
	 */
	public $level;
	/**
	 * @var \Controle\sub1\sub2\AmountType | Monthly fee for the Store subscription level.
	 */
	public $fee;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param StoreSubscriptionLevelCodeType $val
	 * @throws Exception
	 */
	public function setLevel($val)
	{
        $this->level = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setFee($val)
	{
        $this->fee = (int)$val;
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
