<?php

namespace Controle;
class GetCategoryFeaturesResponseType extends \Controle\AbstractResponseType {
    /**
     * @var string | Version value assigned to the current category mapping data for the site.
     *        Compare this value to the version value the application stored with the mappings
     *                  the last time the application executed the call. If the versions are
     * the same,                  the data has not changed since the last time the data was
     * retrieved and stored.
     */
    public $CategoryVersion;
    /**
     * @var dateTime | Gives the time in GMT that the feature flags for the category hierarchy were last updated.
     */
    public $UpdateTime;
    /**
     * @var \Controle\CategoryFeatureType | Describes a category that contains items that match the query.
     */
    public $Category;
    /**
     * @var \Controle\SiteDefaultsType | Returns the feature settings defined for the entire site. All categories share these
     * settings. However, some categories can override some settings, as indicated in the Category
     * nodes (if any).
     */
    public $SiteDefaults;
    /**
     * @var \Controle\FeatureDefinitionsType | Returns definitions of the various features on the site, or the features you requested
     * in FeatureID (if any). Each feature has a node within FeatureDefinitions.
     */
    public $FeatureDefinitions;
}

