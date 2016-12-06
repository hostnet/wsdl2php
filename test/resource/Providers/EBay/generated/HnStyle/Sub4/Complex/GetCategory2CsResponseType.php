<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetCategory2CsResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CategoryArrayType | Contains data about categories that are mapped to characteristics sets. Use this data
     * to determine:<br> - The names and IDs of the characteristics sets<br> - The availability
     * of the Pre-filled Item Information feature for listings in that category (i.e., whether
     * the category is catalog-enabled)<br> - For catalog-enabled categories, the available
     * product search methods<br> - The current version information for the complete mapping<br> -
     * The version information for each characteristics set
     */
    public $MappedCategoryArray;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CategoryArrayType | Contains data about categories (if any) whose characteristics set mappings have changed since
     * the version specified in the request. When a characteristics set mapping changes, the
     * data appears in both the UnmappedCategoryArray object (to indicate that the change occurred)
     * and the MappedCategoryArray object.
     */
    public $UnmappedCategoryArray;
    /**
     * @var string | Current version of the product search page data for the site. This value changes each
     * time changes are made to the search page data. The current version value is not necessarily
     * greater than the previous value. Therefore, when comparing versions, only compare whether
     * the value has changed.
     */
    public $AttributeSystemVersion;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SiteWideCharacteristicsType | A list of one or more characteristics sets mapped to the category, if any. Use this information
     * when working with Item Specifics (Attributes) and Pre-filled Item Information (Catalogs)
     * functionality.
     */
    public $SiteWideCharacteristicSets;
    // @codingStandardsIgnoreEnd

    /**
     * @param CategoryArrayType $val
     * @throws Exception
     */
    public function setMappedCategoryArray($val)
    {
        $this->MappedCategoryArray = $val;
    }

    /**
     * @param CategoryArrayType $val
     * @throws Exception
     */
    public function setUnmappedCategoryArray($val)
    {
        $this->UnmappedCategoryArray = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setAttributeSystemVersion($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for AttributeSystemVersion');
        }
        $this->AttributeSystemVersion = $val;
    }

    /**
     * @param SiteWideCharacteristicsType $val
     * @throws Exception
     */
    public function setSiteWideCharacteristicSets($val)
    {
        $this->SiteWideCharacteristicSets = $val;
    }
}
