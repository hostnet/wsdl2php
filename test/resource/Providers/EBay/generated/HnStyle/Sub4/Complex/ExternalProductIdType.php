<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class ExternalProductIdType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | Specifies the value for the property.
     */
    public $Value;
    /**
     * @var boolean | Applicable for listing use cases only (not buy-side searching). Indicates what eBay
     * should do if more than one product matches the value passed in Value. Only takes effect
     * when more than one match is found. If true, the response should include an error and
     * all matching product IDs. If false, the response should include an error but should
     * not return the matching product IDs. This field is also applicable when listing Half.com
     * items.
     */
    public $ReturnSearchResultOnDuplicates;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ExternalProductCodeType | Returns the notification type. Possible values include: AskSellerQuestion, AuctionCheckoutComplete,
     * BestOffer, CheckoutBuyerRequestTotal, EndOfAuction, Feedback, FixedPriceEndOfTransaction,
     * FixedPriceTransaction, ItemNotReceived, MyMessages, OutBid, SecondChanceOffer, UPIBuyerResponseDispute,
     * UPISellerClosedDispute, UPISellerOpenedDispute, and UPISellerRespondedToDispute.
     */
    public $Type;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setValue($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Value');
        }
        $this->Value = (string)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setReturnSearchResultOnDuplicates($val)
    {
        $this->ReturnSearchResultOnDuplicates = (boolean)$val;
    }

    /**
     * @param ExternalProductCodeType $val
     * @throws Exception
     */
    public function setType($val)
    {
        $this->Type = (ExternalProductCodeType)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (<anyXML>)$val;
    }
}
