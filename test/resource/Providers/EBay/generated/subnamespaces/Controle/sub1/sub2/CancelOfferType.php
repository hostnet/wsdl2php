<?php

namespace Controle\sub1\sub2;

/**
 * CancelOfferType
 * Container for a list of offers. May contain zero, one, or multiple        OfferType objects,
 * each of which represents one offer extended by        a user on a listing.
 */
class CancelOfferType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\OfferType | Contains the data for one offer. This includes: data for the user making the
	 *  offer, the amount of the offer, the quantity of items being bought from the
	 *  listing, the type of offer being made, and more.
	 */
	public $Offer;
	/**
	 * @var string | 	 */
	public $Explanation;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param OfferType $val
	 * @throws \Exception
	 */
	public function setOffer($val)
	{
        $this->Offer = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setExplanation($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Explanation');
        }
        $this->Explanation = $val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws \Exception
	 */
	public function setAny($val)
	{
        $this->any = $val;
	}
}
