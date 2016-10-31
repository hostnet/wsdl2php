<?php

namespace Controle;

/**
 * RequestCategoriesType
 * A set of parameters that control the retrieval of categories (not items) that match a search
 * query. In GetSearchResults, at least one child element must be specified in order to retrieve
 * matching categories. If empty or not present, no matching category information is returned.
 * .
 */
class RequestCategoriesType
{
    /**
     * @var boolean | Filter to retrieve matching categories but not matching items or buying guides. If true,
     * only matching categories are returned (with no item or buying guide details). If false
     * or not present, matching items and matching categories are both returned, along with
     * buying guide details (if any). If TotalOnly and Categories.CategoriesOnly are both specified in
     * the request and their values are inconsistent with each other, TotalOnly overrides Categories.CategoriesOnly. That
     * is, if TotalOnly is true and Categories.CategoriesOnly is false, the results include
     * matching categories but no item data or buying guides. If TotalOnly is false and Categories.CategoriesOnly
     * is true, the results include matching categories, item data, and buying guides.
     */
    public $categoriesonly;
    /**
     * @var int | Maximum quantity of matching categories to return at the first level of the
     *     category hierarchy (CategoryLevel 1).
     */
    public $maxcategories;
    /**
     * @var int | Maximum quantity of matching subcategories to return at each lower level
     *  of the hierarchy.
     */
    public $maxsubcategories;
    /**
     * @var int | Filter to control the deepest matching category level to return.             If you
     * specify 0, no category data is returned. If you specify a negative number,
     *    the results are unpredictable.
     */
    public $levels;
    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setCategoriesOnly($val)
    {
        $this->categoriesonly = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setMaxCategories($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->maxcategories = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setMaxSubcategories($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->maxsubcategories = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setLevels($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->levels = (int)$val;
    }
}
