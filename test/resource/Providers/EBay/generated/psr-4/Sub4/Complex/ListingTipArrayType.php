<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ListingTipArrayType
 * (out) Contains a list of tips on improving a listing's details, if any.
 */
class ListingTipArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ListingTipType | An individual tip on improving a listing's details.
     */
    public $ListingTip;
    // @codingStandardsIgnoreEnd

    /**
     * @param ListingTipType $val
     * @throws \Exception
     */
    public function setListingTip($val)
    {
        $this->ListingTip = $val;
    }
}
