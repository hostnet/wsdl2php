<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ExpressProductType
 * Information that eBay Express collects about an eBay catalog product.
 */
class ExpressProductType
{
    /**
     * @var string | Title of a Want It Now post.
     */
    public $title;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Specifies the lower limit of price range for the automatic search criteria.
     */
    public $minprice;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Specifies the upper limit of price range for the automatic search criteria.
     */
    public $maxprice;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\anyURI | Fully qualified URL for a standard image (if any) that is associated with the product. A
     * seller includes the stock photo in the listing by setting IncludeStockPhotoURL.
     */
    public $stockphotourl;
    /**
     * @var int | Total number of active listings (on the specified Express site) that were pre-filled
     * based on this eBay catalog product. Only returned when ProductDetails is set to Fine. This
     * does not necessarily match the number of items returned in ItemArray (if any), because
     * the call returns deduped items in ItemArray.
     */
    public $itemcount;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ExternalProductIDType | Contains an ISBN, UPC, or EAN value from the catalog product associated with the Half.com
     * item. All Half.com items are listed with Pre-filled Item Information.
     */
    public $externalproductid;
    /**
     * @var long | The global reference ID for the eBay catalog product. Only returned when ProductDetails
     * is set to Fine.<br> <br> <span class="tablenote"><b>Note:</b> This value is not the
     * same as the ProductID used in AddItem and related calls. A ProductID represents a particular
     * version of a catalog product, which is associated with a particular set of Item Specifics
     * and other details. A ProductReferenceID is a more generic or global reference to a catalog
     * product, which is useful for buy-side searching. One ProductReferenceID can be associated
     * with multiple ProductIDs.</span>
     */
    public $productreferenceid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\NameValueListArrayType | A list of attribute and value pairs that are included in the product's pre-filled Item
     * Specifics and that are applicable in Express search results. This does not necessarily
     * include all Item Specifics that are defined for the product in the catalog. Typically,
     * it returns only the top attributes (as determined by Express). See ExternalProductID
     * for the ISBN or UPC, if applicable. Only returned when ProductDetails is set to Fine.
     */
    public $itemspecifics;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setTitle($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Title');
        }
        $this->title = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setMinPrice($val)
    {
        $this->minprice = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setMaxPrice($val)
    {
        $this->maxprice = (int)$val;
    }

    /**
     * @param anyURI $val
     * @throws Exception
     */
    public function setStockPhotoURL($val)
    {
        $this->stockphotourl = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setItemCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->itemcount = (int)$val;
    }

    /**
     * @param ExternalProductIDType $val
     * @throws Exception
     */
    public function setExternalProductID($val)
    {
        $this->externalproductid = (int)$val;
    }

    /**
     * @param long $val
     * @throws Exception
     */
    public function setProductReferenceID($val)
    {
        $this->productreferenceid = (int)$val;
    }

    /**
     * @param NameValueListArrayType $val
     * @throws Exception
     */
    public function setItemSpecifics($val)
    {
        $this->itemspecifics = (int)$val;
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
