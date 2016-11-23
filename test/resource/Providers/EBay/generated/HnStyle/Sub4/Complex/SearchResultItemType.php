<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * SearchResultItemType
 * Contains the data for one item listing found by a search (such as by        GetSearchResults).
 */
class SearchResultItemType
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
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\NameValueListArrayType | A list of attribute and value pairs. GetSearchResults can return this            when
     * the request either specifies IncludeCondition as true or specifies a product finder
     *            search by using SearchRequest.            If IncludeCondition was true, this
     * returns the item condition (e.g., New).            If SearchRequest was used to perform
     * a product finder search, the list            is limited to attributes that would be
     * included in the            summary search results on the Web site, if any. In some categories,
     *            no summary attributes are returned in search results (even when the item
     *            is listed with Item Specifics.)
     */
    public $ItemSpecific;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SearchResultValuesCodeType | Contains additional information about the item listing returned in Item. This
     *      information includes whether the item has an image associated with it,
     *    and more. May contain zero, one, or multiple SearchResultValuesCodeType
     *   values indicating different pieces of additional information about            the
     * listing. These values are analogous to the icons that appear in an            item listing's
     * line in a Search page.            Output only.
     */
    public $SearchResultValues;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param ItemType $val
     * @throws Exception
     */
    public function setItem($val)
    {
        $this->Item = (int)$val;
    }

    /**
     * @param NameValueListArrayType $val
     * @throws Exception
     */
    public function setItemSpecific($val)
    {
        $this->ItemSpecific = (int)$val;
    }

    /**
     * @param SearchResultValuesCodeType $val
     * @throws Exception
     */
    public function setSearchResultValues($val)
    {
        $this->SearchResultValues = (int)$val;
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
