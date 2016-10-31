<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetCategory2CsRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var string | ID of the category in which the Want It Now post is listed.
     */
    public $categoryid;
    /**
     * @var string | Current version of the product search page data for the site. This value changes each
     * time changes are made to the search page data. The current version value is not necessarily
     * greater than the previous value. Therefore, when comparing versions, only compare whether
     * the value has changed.
     */
    public $attributesystemversion;
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
     * @param string $val
     * @throws Exception
     */
    public function setAttributeSystemVersion($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for AttributeSystemVersion');
        }
        $this->attributesystemversion = (int)$val;
    }
}
