<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetCategoryFeaturesRequestType
 * Returns the categories on the site that have the features you requested in FeatureDefinitions.
 * The return set might have fewer categories than the site has defined, because only some categories
 * implement those features.
 */
class GetCategoryFeaturesRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var string | ID of the category in which the Want It Now post is listed.
     */
    public $categoryid;
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
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\FeatureIDCodeType | Retrieves the specified feature setting for the site and for the category you specified
     * in CategoryID, if any. If no feature IDs are specified, the call retrieves all feature
     * settings.
     */
    public $featureid;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setCategoryID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CategoryID');
        }
        $this->categoryid = (int)$val;
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

    /**
     * @param FeatureIDCodeType $val
     * @throws Exception
     */
    public function setFeatureID($val)
    {
        $this->featureid = (int)$val;
    }
}
