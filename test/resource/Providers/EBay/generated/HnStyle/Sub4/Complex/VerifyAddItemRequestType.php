<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * VerifyAddItemRequestType
 * Defines a single new item and tests the definition for validity. Behaves exactly the same
 * as AddItem (same inputs, same outputs, and same behavior and usage rules), but without actually
 * listing the item to an eBay site. Applications can use this call to test the definition
 * of an item before actually listing it to eBay with AddItem, reducing item listing-related
 * errors.
 */
class VerifyAddItemRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemType | Information about the item that spawned the transaction. It is a purchase from this
     * item's listing that the transaction represents. To remove a property from an item, specify
     * it in ModifyType as a changed property, but do not give it a value in Item. Also applicable
     * to Half.com (for GetOrders).
     */
    public $Item;
    /**
     * @var boolean | Indicates if the response should include detailed data relating to whether an item would
     * qualify as an Express listing. For information about the Express-related data that can
     * be returned when IncludeExpressRequirements is set to true, see the annotations for
     * the output of VerifyAddItem and see the eBay Web Services Guide.
     */
    public $IncludeExpressRequirements;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ExternalProductIDType | Contains an ISBN, UPC, or EAN value from the catalog product associated with the Half.com
     * item. All Half.com items are listed with Pre-filled Item Information.
     */
    public $ExternalProductID;
    // @codingStandardsIgnoreEnd

    /**
     * @param ItemType $val
     * @throws Exception
     */
    public function setItem($val)
    {
        $this->Item = (ItemType)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setIncludeExpressRequirements($val)
    {
        $this->IncludeExpressRequirements = (boolean)$val;
    }

    /**
     * @param ExternalProductIDType $val
     * @throws Exception
     */
    public function setExternalProductID($val)
    {
        $this->ExternalProductID = (ExternalProductIDType)$val;
    }
}
