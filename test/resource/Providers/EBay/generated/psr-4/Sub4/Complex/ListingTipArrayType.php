<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ListingTipArrayType
 * (out) Contains a list of tips on improving a listing's details, if any.
 */
class ListingTipArrayType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ListingTipType | An individual tip on improving a listing's details.
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
