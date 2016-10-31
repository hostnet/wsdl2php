<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetDescriptionTemplatesRequestType
 * Request for DescriptionTemplates.
 */
class GetDescriptionTemplatesRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var string | ID of the category in which the Want It Now post is listed.
     */
    public $categoryid;
    /**
     * @var dateTime | The time the status was last modified. Also applicable to Half.com (for GetOrders).
     */
    public $lastmodifiedtime;
    /**
     * @var boolean | Indicates whether to retrieve templates for motor vehicle categories for eBay Motors
     * (site 100). If true, templates are returned for motor vehicle categories. If false, templates
     * are returned for non-motor vehicle categories such as Parts and Accessories. If included
     * as an input field (whether true or false), this overrides any value provided for CategoryID.
     */
    public $motorvehicles;
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
     * @param dateTime $val
     * @throws Exception
     */
    public function setLastModifiedTime($val)
    {
        $this->lastmodifiedtime = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setMotorVehicles($val)
    {
        $this->motorvehicles = (int)$val;
    }
}
