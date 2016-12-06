<?php

namespace Controle;

/**
 * AttributeArrayType
 * Reserved for future use.
 */
class AttributeArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\AttributeType | A salient aspect or feature of an item in a given category.            Attributes are
     * known as "Item Specifics" in the eBay Web site.            Use attributes to describe
     * an item in a standard way so that buyers can find it more easily.            For example,
     * "Publication Year" is a standard attribute for books.            In item-listing requests,
     * multiple attributes can be specified.            Some categories (e.g., Tickets) always
     * require certain attributes to be specified.            Therefore, in item-listing requests
     * you need to at least specify "editable" attributes            (EditType 0 and EditType
     * 2 attributes) if they are identified as required            in the attribute meta-data.
     * See the eBay Web Services guide for information            about attrribute meta-data,
     * how to determine the valid attributes for a category,            and how to determine
     * whether attributes are required.            <br><br>            If you are revising
     * or relisting an item, you don't need to pass in attributes            that were already
     * specified in the original listing.            To remove an optional attribute, set all
     * its value IDs to "-100". If the item has bids            (or items have been sold) but
     * there are more than 12 hours remaining until the listing ends,            you can add
     * Attribute nodes but you cannot remove or modify data in previously            specified
     * Attribute nodes. If the item has bids and the listing ends within 12 hours,
     *    you cannot add or remove Attribute nodes or modify the contents of previously
     *         specified Attribute nodes.            <br><br>            For GetCategoryListings,
     * this returns the item condition only (and it is            only returned if IncludeCondition
     * = true in the request).            Not applicable to Half.com.
     */
    public $Attribute;
    // @codingStandardsIgnoreEnd

    /**
     * @param AttributeType $val
     * @throws Exception
     */
    public function setAttribute($val)
    {
        $this->Attribute = $val;
    }
}
