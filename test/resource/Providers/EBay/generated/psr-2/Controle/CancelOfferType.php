<?php

namespace Controle;
/**
 * CancelOfferType
 * Container for a list of offers. May contain zero, one, or multiple        OfferType objects,
 * each of which represents one offer extended by        a user on a listing.
 */
class CancelOfferType {
    /**
     * @var \Controle\OfferType | Contains the data for one offer. This includes: data for the user making the
     *     offer, the amount of the offer, the quantity of items being bought from the
     *        listing, the type of offer being made, and more.
     */
    public $Offer;
    /**
     * @var string |      */
    public $Explanation;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}

