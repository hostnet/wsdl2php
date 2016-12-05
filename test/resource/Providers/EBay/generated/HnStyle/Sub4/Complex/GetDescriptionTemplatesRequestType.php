<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetDescriptionTemplatesRequestType
 * Request for DescriptionTemplates.
 */
class GetDescriptionTemplatesRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | ID of the category in which the Want It Now post is listed.
     */
    public $CategoryID;
    /**
     * @var dateTime | The time the status was last modified. Also applicable to Half.com (for GetOrders).
     */
    public $LastModifiedTime;
    /**
     * @var boolean | Indicates whether to retrieve templates for motor vehicle categories for eBay Motors
     * (site 100). If true, templates are returned for motor vehicle categories. If false, templates
     * are returned for non-motor vehicle categories such as Parts and Accessories. If included
     * as an input field (whether true or false), this overrides any value provided for CategoryID.
     */
    public $MotorVehicles;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCategoryID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CategoryID');
        }
        $this->CategoryID = (string)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setLastModifiedTime($val)
    {
        $this->LastModifiedTime = (dateTime)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setMotorVehicles($val)
    {
        $this->MotorVehicles = (boolean)$val;
    }
}
