<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetCharitiesResponseType
 * Contains information about charity nonprofit organizations that meet the criteria specified
 * in the request.
 */
class GetCharitiesResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CharityInfoType | Identifies a Giving Works listing and the benefiting nonprofit charity organization
     * selected by the charity seller, if any. If specified, the seller must also accept PayPal
     * as a payment method for the item (see Item.PaymentMethods). <br> <br>Giving Works listings
     * are not eligible for some eBay Express sites. (If ExpressListing is false in GetItem
     * or VerifyAddItem and you specified Charity, check whether ExpressItemRequirements returns
     * NoCharity as a cause.) <br><br> When you revise a item, you can add or change the charity
     * information, but you cannot remove it. When you relist an item, use DeletedField to
     * remove a charity information. <br><br> Not applicable to Half.com.
     */
    public $Charity;
    // @codingStandardsIgnoreEnd

    /**
     * @param CharityInfoType $val
     * @throws Exception
     */
    public function setCharity($val)
    {
        $this->Charity = ()$val;
    }
}
