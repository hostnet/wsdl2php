<?php

namespace Controle;

/**
 * SearchResultItemType
 * Contains the data for one item listing found by a search (such as by        GetSearchResults).
 */
class SearchResultItemType
{
    /**
     * @var \Controle\ItemType | Information about the item that spawned the transaction. It is a purchase from this
     * item's listing that the transaction represents. To remove a property from an item, specify
     * it in ModifyType as a changed property, but do not give it a value in Item. Also applicable
     * to Half.com (for GetOrders).
     */
    public $item;
    /**
     * @var \Controle\NameValueListArrayType | A list of attribute and value pairs. GetSearchResults can return this            when
     * the request either specifies IncludeCondition as true or specifies a product finder
     *            search by using SearchRequest.            If IncludeCondition was true, this
     * returns the item condition (e.g., New).            If SearchRequest was used to perform
     * a product finder search, the list            is limited to attributes that would be
     * included in the            summary search results on the Web site, if any. In some categories,
     *            no summary attributes are returned in search results (even when the item
     *            is listed with Item Specifics.)
     */
    public $itemspecific;
    /**
     * @var \Controle\SearchResultValuesCodeType | Contains additional information about the item listing returned in Item. This
     *      information includes whether the item has an image associated with it,
     *    and more. May contain zero, one, or multiple SearchResultValuesCodeType
     *   values indicating different pieces of additional information about            the
     * listing. These values are analogous to the icons that appear in an            item listing's
     * line in a Search page.            Output only.
     */
    public $searchresultvalues;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @param ItemType $val
     * @throws Exception
     */
    public function setItem($val)
    {
        $this->item = (int)$val;
    }

    /**
     * @param NameValueListArrayType $val
     * @throws Exception
     */
    public function setItemSpecific($val)
    {
        $this->itemspecific = (int)$val;
    }

    /**
     * @param SearchResultValuesCodeType $val
     * @throws Exception
     */
    public function setSearchResultValues($val)
    {
        $this->searchresultvalues = (int)$val;
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
