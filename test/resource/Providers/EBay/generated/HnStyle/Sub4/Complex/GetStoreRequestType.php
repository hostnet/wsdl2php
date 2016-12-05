<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetStoreRequestType
 * Retrieves configuration information for the eBay store owned by the caller. The return value
 * from GetStoreResponse is a StoreType, which contains the store configuration, including
 * the store name, URL, subscription level, and other data. You can set CategoryStructureOnly
 * to true to retrieve only information about the category hierarchy of the store.
 */
class GetStoreRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var boolean | If this is set to True, only the category structure of the store is returned. If this
     * is not specified or set to False, the complete store configuration is returned.
     */
    public $CategoryStructureOnly;
    /**
     * @var int | Specifies the category ID for the topmost category to return (along with the subcategories
     * under it, the value of the LevelLimit property determining how deep). This tag is optional.
     * If RootCategoryID is not specified, then the category tree starting at that root Category
     * is returned.
     */
    public $RootCategoryID;
    /**
     * @var int | Specifies the limit for the number of levels of the category hierarchy to return, where
     * the given root category is level 1 and its children are level 2. Only categories at
     * or above the level specified are returned. This tag is optional. If LevelLimit is not
     * set, the complete category hierarchy is returned. Stores support category hierarchies
     * up to 3 levels only.
     */
    public $LevelLimit;
    // @codingStandardsIgnoreEnd

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setCategoryStructureOnly($val)
    {
        $this->CategoryStructureOnly = (boolean)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setRootCategoryID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->RootCategoryID = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setLevelLimit($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->LevelLimit = (int)$val;
    }
}
