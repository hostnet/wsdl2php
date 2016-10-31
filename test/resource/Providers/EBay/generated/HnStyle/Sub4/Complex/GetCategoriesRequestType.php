<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetCategoriesRequestType
 * Retrieves the latest category hierarchy available on a given site. (By default, this is
 * the site to which you submit the request.) You can retrieve all categories on the site,
 * or you can use CategoryParent to retrieve one particular category and its subcategories.<br> <br> For
 * each category, the call returns the category name, its unique ID (within the site to which
 * you sent the request), and meta-data that helps you determine where the category fits in
 * the hierarchy. eBay requires sellers to specify a category ID for most new listings. You
 * can only list in leaf categories.<br> <br> The call also identifies a few eBay features
 * that are only supported in some categories. For example, some categories support immediate
 * payment (AutoPay), and some categories don't. For information about additional features
 * that vary by category, use GetCategoryFeatures, GetCategory2FinanceOffer, and/or GetCategory2CS.<br> <br> The
 * API provides other calls that supplement GetCategories. For example, consider using GetSuggestedCategories
 * to help the seller choose a category ID. In certain cases, it may be helpful to use GetCategoryMappings
 * to update locally stored item data (although most applications can use the simpler CategoryMappingAllowed
 * flag in AddItem for this purpose). <p>Applicable to the <a href="http://developer.ebay.com/developercenter/rest/"
 * target="_blank">REST API</a>.</p>
 */
class GetCategoriesRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var string | Specifies the eBay site for which to retrieve the category hierarchy. Use the numeric
     * site code (e.g., 77 for eBay Germany). Only necessary if you want to retrieve category
     * data for a site other than the site to which you are submitting the request.
     */
    public $categorysiteid;
    /**
     * @var string | Specifies the ID of the highest-level category to return, along with its subcategories. If
     * no parent category is specified, all categories are returned for the specified site.
     * (Please do not pass a value of 0; zero (0) is an invalid value for CategoryParent.) To
     * determine available category IDs, call GetCategories with no filters and use a DetailLevel
     * value of ReturnAll. If you specify multiple parent categories, the hierarchy for each
     * one is returned.
     */
    public $categoryparent;
    /**
     * @var int | Specifies the limit for the number of levels of the category hierarchy to return, where
     * the given root category is level 1 and its children are level 2. Only categories at
     * or above the level specified are returned. This tag is optional. If LevelLimit is not
     * set, the complete category hierarchy is returned. Stores support category hierarchies
     * up to 3 levels only.
     */
    public $levellimit;
    /**
     * @var boolean | Set this value to true to retrieve useful results. If true, retrieves all categories
     * that override the site default settings. (If false or not specified, only retrieves
     * data about leaf categories. If the details about overridden settings are only defined
     * on a category's ancestor, the call does not return those settings if you only retrieve
     * leaf categories.)
     */
    public $viewallnodes;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setCategorySiteID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CategorySiteID');
        }
        $this->categorysiteid = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCategoryParent($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CategoryParent');
        }
        $this->categoryparent = (int)$val;
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
        $this->levellimit = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setViewAllNodes($val)
    {
        $this->viewallnodes = (int)$val;
    }
}
