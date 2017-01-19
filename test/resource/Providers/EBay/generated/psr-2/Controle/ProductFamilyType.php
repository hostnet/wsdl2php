<?php

namespace Controle;

/**
 * ProductFamilyType
 * A set of results returned from a catalog product search. Use GetProductSearchResults or
 * GetProductFamilyMembers to perform the search.      See the guide for information about
 * Pre-filled Item Information (Catalogs) functionality.
 */
class ProductFamilyType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\ProductType | A transient header that describes the current search results. Contains a
     *  an ID, a subset of attributes, and a typical stock photo             to help a user
     * easily distinguish the products in the current result set            from products in
     * other result sets returned in the same response.             One ParentProduct is returned
     * per ProductFamily.
     */
    public $ParentProduct;
    /**
     * @var \Controle\ProductType | A set of products (within the same product family) that match the search query.
     */
    public $FamilyMembers;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @var boolean
     */
    public $hasMoreChildren;
    // @codingStandardsIgnoreEnd

    /**
     * @param ProductType $val
     * @throws \Exception
     */
    public function setParentProduct($val)
    {
        $this->ParentProduct = $val;
    }

    /**
     * @param ProductType $val
     * @throws \Exception
     */
    public function setFamilyMembers($val)
    {
        $this->FamilyMembers = $val;
    }

    /**
     * @param <anyXML> $val
     * @throws \Exception
     */
    public function setAny($val)
    {
        $this->any = $val;
    }

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setHasMoreChildren($val)
    {
        $this->hasMoreChildren = $val;
    }
}
