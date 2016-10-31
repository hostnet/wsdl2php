<?php

namespace Controle\sub1\sub2;

/**
 * BestOfferDetailsType
 * Container for BestOffer properties associated with the item.
 */
class BestOfferDetailsType
{
	/**
	 * @var int | The number of items the user has made best offers on.
	 */
	public $bestoffercount;
	/**
	 * @var boolean | Specifies the default site setting for whether categories allow best offers. True means
	 * best offers are allowed site-wide, unless a specific category overrides the setting.
	 */
	public $bestofferenabled;
	/**
	 * @var \Controle\sub1\sub2\AmountType | (GetMyeBayBuying only) Indicates the latest BestOffer the user has provided for the item
	 * .
	 */
	public $bestoffer;
	/**
	 * @var \Controle\sub1\sub2\BestOfferStatusCodeType | (GetMyeBayBuying only) Indicates the status of the latest BestOffer the user has provided
	 * for the item .
	 */
	public $bestofferstatus;
	/**
	 * @var \Controle\sub1\sub2\BestOfferTypeCodeType | Indicates the best offer type of the latest BestOffer the user has provided for the item
	 * .
	 */
	public $bestoffertype;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setBestOfferCount($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->bestoffercount = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setBestOfferEnabled($val)
	{
        $this->bestofferenabled = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setBestOffer($val)
	{
        $this->bestoffer = (int)$val;
	}

	/**
	 * @param BestOfferStatusCodeType $val
	 * @throws Exception
	 */
	public function setBestOfferStatus($val)
	{
        $this->bestofferstatus = (int)$val;
	}

	/**
	 * @param BestOfferTypeCodeType $val
	 * @throws Exception
	 */
	public function setBestOfferType($val)
	{
        $this->bestoffertype = (int)$val;
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
