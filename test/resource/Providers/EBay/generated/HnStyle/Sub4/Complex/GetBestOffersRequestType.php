<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetBestOffersRequestType
 * Retrieves the best offers associated with an ItemID according to the BestOfferStatus filter,
 * where Active is the default value. Alternatively, specify a best offer ID to retrieve the
 * details for a specific best offer.
 */
class GetBestOffersRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $ItemID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\BestOfferIDType | An id to distinguish this best offer from other best offers made on the item.
     */
    public $BestOfferID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\BestOfferStatusCodeType | (GetMyeBayBuying only) Indicates the status of the latest BestOffer the user has provided
     * for the item .
     */
    public $BestOfferStatus;
    // @codingStandardsIgnoreEnd

    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        $this->ItemID = $val;
    }

    /**
     * @param BestOfferIDType $val
     * @throws Exception
     */
    public function setBestOfferID($val)
    {
        $this->BestOfferID = $val;
    }

    /**
     * @param BestOfferStatusCodeType $val
     * @throws Exception
     */
    public function setBestOfferStatus($val)
    {
        $this->BestOfferStatus = $val;
    }
}
