<?php

namespace Controle\sub1\sub2;

/**
 * ListingTipArrayType
 * (out) Contains a list of tips on improving a listing's details, if any.
 */
class ListingTipArrayType
{
	/**
	 * @var \Controle\sub1\sub2\ListingTipType | An individual tip on improving a listing's details.
	 */
	public $listingtip;
	/**
	 * @param ListingTipType $val
	 * @throws Exception
	 */
	public function setListingTip($val)
	{
        $this->listingtip = (int)$val;
	}
}
