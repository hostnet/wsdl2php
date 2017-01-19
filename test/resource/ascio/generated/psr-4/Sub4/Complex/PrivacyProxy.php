<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class PrivacyProxy
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PrivacyProxyType
     */
    public $Type;
    /**
     * @var boolean
     */
    public $PrivacyAdmin;
    /**
     * @var boolean
     */
    public $PrivacyTech;
    /**
     * @var boolean
     */
    public $PrivacyBilling;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Extensions
     */
    public $Extensions;
    // @codingStandardsIgnoreEnd

    /**
     * @param PrivacyProxyType $val
     * @throws \Exception
     */
    public function setType($val)
    {
        $this->Type = $val;
    }

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setPrivacyAdmin($val)
    {
        $this->PrivacyAdmin = $val;
    }

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setPrivacyTech($val)
    {
        $this->PrivacyTech = $val;
    }

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setPrivacyBilling($val)
    {
        $this->PrivacyBilling = $val;
    }

    /**
     * @param Extensions $val
     * @throws \Exception
     */
    public function setExtensions($val)
    {
        $this->Extensions = $val;
    }
}
