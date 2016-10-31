<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetCategoryFeaturesResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    /**
     * @var string | Version value assigned to the current category mapping data for the site.
     *        Compare this value to the version value the application stored with the mappings
     *                  the last time the application executed the call. If the versions are
     * the same,                  the data has not changed since the last time the data was
     * retrieved and stored.
     */
    public $categoryversion;
    /**
     * @var dateTime | Gives the time in GMT that the feature flags for the category hierarchy were last updated.
     */
    public $updatetime;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CategoryFeatureType | Describes a category that contains items that match the query.
     */
    public $category;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SiteDefaultsType | Returns the feature settings defined for the entire site. All categories share these
     * settings. However, some categories can override some settings, as indicated in the Category
     * nodes (if any).
     */
    public $sitedefaults;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\FeatureDefinitionsType | Returns definitions of the various features on the site, or the features you requested
     * in FeatureID (if any). Each feature has a node within FeatureDefinitions.
     */
    public $featuredefinitions;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setCategoryVersion($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CategoryVersion');
        }
        $this->categoryversion = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setUpdateTime($val)
    {
        $this->updatetime = (int)$val;
    }

    /**
     * @param CategoryFeatureType $val
     * @throws Exception
     */
    public function setCategory($val)
    {
        $this->category = (int)$val;
    }

    /**
     * @param SiteDefaultsType $val
     * @throws Exception
     */
    public function setSiteDefaults($val)
    {
        $this->sitedefaults = (int)$val;
    }

    /**
     * @param FeatureDefinitionsType $val
     * @throws Exception
     */
    public function setFeatureDefinitions($val)
    {
        $this->featuredefinitions = (int)$val;
    }
}