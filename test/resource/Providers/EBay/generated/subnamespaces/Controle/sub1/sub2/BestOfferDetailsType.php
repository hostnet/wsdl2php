<?php

namespace Controle\sub1\sub2;

/**
 * BestOfferDetailsType
 * Container for BestOffer properties associated with the item.
 */
class BestOfferDetailsType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int | The number of items the user has made best offers on.
	 */
	public $BestOfferCount;
	/**
	 * @var boolean | Specifies the default site setting for whether categories allow best offers. True means
	 * best offers are allowed site-wide, unless a specific category overrides the setting.
	 */
	public $BestOfferEnabled;
	/**
	 * @var \Controle\sub1\sub2\AmountType | (GetMyeBayBuying only) Indicates the latest BestOffer the user has provided for the item
	 * .
	 */
	public $BestOffer;
	/**
	 * @var \Controle\sub1\sub2\BestOfferStatusCodeType | (GetMyeBayBuying only) Indicates the status of the latest BestOffer the user has provided
	 * for the item .
	 */
	public $BestOfferStatus;
	/**
	 * @var \Controle\sub1\sub2\BestOfferTypeCodeType | Indicates the best offer type of the latest BestOffer the user has provided for the item
	 * .
	 */
	public $BestOfferType;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setBestOfferCount($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->BestOfferCount = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setBestOfferEnabled($val)
	{
        $this->BestOfferEnabled = $val;
	}

	/**
	 * @param AmountType $val
	 * @throws \Exception
	 */
	public function setBestOffer($val)
	{
        $this->BestOffer = $val;
	}

	/**
	 * @param BestOfferStatusCodeType $val
	 * @throws \Exception
	 */
	public function setBestOfferStatus($val)
	{
        $this->BestOfferStatus = $val;
	}

	/**
	 * @param BestOfferTypeCodeType $val
	 * @throws \Exception
	 */
	public function setBestOfferType($val)
	{
        $this->BestOfferType = $val;
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
