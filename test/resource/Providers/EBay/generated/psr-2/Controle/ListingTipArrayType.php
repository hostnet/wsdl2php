<?php

namespace Controle;
/**
 * ListingTipArrayType
 * (out) Contains a list of tips on improving a listing's details, if any.
 */
class ListingTipArrayType {
    /**
     * @var \Controle\ListingTipType | An individual tip on improving a listing's details.
     */
    public $ListingTip;
    /**
     * @param ListingTipType $val
     * @throws Exception
     */
    public function setListingTip($val) {
        
        $this->ListingTip = (int)$val;
    }

}

