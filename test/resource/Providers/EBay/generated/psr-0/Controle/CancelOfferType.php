<?php

namespace Controle;

/**
 * CancelOfferType
 * Container for a list of offers. May contain zero, one, or multiple        OfferType objects,
 * each of which represents one offer extended by        a user on a listing.
 */
class CancelOfferType
{
	/**
	 * @var \Controle\OfferType | Contains the data for one offer. This includes: data for the user making the
	 *  offer, the amount of the offer, the quantity of items being bought from the
	 *  listing, the type of offer being made, and more.
	 */
	public $offer;
	/**
	 * @var string | 	 */
	public $explanation;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param OfferType $val
	 * @throws Exception
	 */
	public function setOffer($val)
	{
        $this->offer = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setExplanation($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Explanation');
        }
        $this->explanation = (int)$val;
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
