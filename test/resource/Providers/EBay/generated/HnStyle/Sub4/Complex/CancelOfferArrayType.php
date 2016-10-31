<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * CancelOfferArrayType
 * Container for a list of offers. May contain zero, one, or multiple        OfferType objects,
 * each of which represents one offer extended by        a user on a listing.
 */
class CancelOfferArrayType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CancelOfferType | Contains the data for one offer. This includes: data for the user making the
     *     offer, the amount of the offer, the quantity of items being bought from the
     *        listing, the type of offer being made, and more.
     */
    public $canceloffer;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param CancelOfferType $val
     * @throws Exception
     */
    public function setCancelOffer($val)
    {
        $this->canceloffer = (int)$val;
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
