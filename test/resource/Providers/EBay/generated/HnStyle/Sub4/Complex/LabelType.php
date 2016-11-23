<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * LabelType
 * Applicable when working with Pre-filled Item Information (Catalogs) functionality. The label
 * to display when presenting the attribute to a user. Not necessarily the same as the attribute's
 * label as defined in the characteristic set (i.e., the label could be overridden by the catalog).
 */
class LabelType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | Name of the eBay Store. The name is shown at the top of the Store page.
     */
    public $Name;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @var boolean
     */
    public $visible;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Name');
        }
        $this->Name = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setVisible($val)
    {
        $this->visible = (int)$val;
    }
}
