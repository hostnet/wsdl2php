<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetProductSellingPagesRequestType
 * Retrieves information that describes how to present catalog product information to a seller.
 * Use this information to present users with the equivalent of the Item Specifics portion
 * of the eBay Title and Description pages and to validate user-specified values for eBay attributes
 * on the client before including them in an AddItem call or related calls. The data contains
 * a list of all the attributes that are applicable for one or more requested products, along
 * with related meta-data. The meta-data specifies the pre-filled values of each attribute,
 * the possible values of attributes that are not pre-filled, the logic for presenting the attributes
 * to a user, and rules for validating the user's selections. Use the results in combination
 * with GetAttributesXSL to render the Item Specifics in a graphical user interface. See the
 * eBay Web Services Guide for an overview of Pre-filled Item Information, details about searching
 * for catalog products, and information about the ProductSellingPages content model.
 */
class GetProductSellingPagesRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ProductUseCaseCodeType | Specifies the context in which the call is being executed, which will imply certain
     * validation rules. Use this property to make sure you retrieve the appropriate version
     * of product information and attribute meta-data when you are listing, revising, or relisting
     * an item with Pre-filled Item Information. Valid values:<br> <b>SYI</b> = Sell Your Item.
     * Use before adding an item. Causes the response to include the latest product ID in the
     * system (given an ID specified in the Products element) and the corresponding characteristic
     * meta-data.<br> <b>RYI</b> = Revise Your Item. Use this before revising an item. Causes
     * the response to return the product ID, attribute data, and other data associated with
     * the version of the product that you pass in the Products element. This is useful in
     * case the product ID or associated data has changed in the system since the item was
     * originally listed. When revising an item, this helps you make changes that are consistent
     * with the original listing.<br> <b>RELIST</b> = Use this before relisting an item. Causes
     * the response to include the latest product ID in the system (given an ID specified in
     * the Products element) and the corresponding characteristic meta-data. (Same as SYI).
     */
    public $UseCase;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ProductType | A suggested product to use to list an item with Pre-filled Item Information.
     *     Returned from GetItemRecommendations when the Suggested Attributes engine is used
     *             See the Developer's Guide for additional details.
     */
    public $Product;
    // @codingStandardsIgnoreEnd

    /**
     * @param ProductUseCaseCodeType $val
     * @throws \Exception
     */
    public function setUseCase($val)
    {
        $this->UseCase = $val;
    }

    /**
     * @param ProductType $val
     * @throws \Exception
     */
    public function setProduct($val)
    {
        $this->Product = $val;
    }
}
