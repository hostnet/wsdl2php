<?php

namespace Controle\sub1\sub2;

/**
 * ListingTipArrayType
 * (out) Contains a list of tips on improving a listing's details, if any.
 */
class ListingTipArrayType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\ListingTipType | An individual tip on improving a listing's details.
	 */
	public $ListingTip;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ListingTipType $val
	 * @throws Exception
	 */
	public function setListingTip($val)
	{
        $this->ListingTip = (int)$val;
	}
}
