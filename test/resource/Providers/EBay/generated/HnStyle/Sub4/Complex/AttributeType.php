<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * AttributeType
 * A salient aspect or feature of an item. On eBay.com, this information is used in the Item
 * Specifics section of a listing to describe an item in a standard way so that buyers can
 * find it more easily.
 */
class AttributeType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ValType | Specifies the value for the property.
     */
    public $Value;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @var int
     */
    public $attributeID;
    /**
     * @var string
     */
    public $attributeLabel;
    // @codingStandardsIgnoreEnd

    /**
     * @param ValType $val
     * @throws Exception
     */
    public function setValue($val)
    {
        $this->Value = (int)$val;
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
     * @param int $val
     * @throws Exception
     */
    public function setAttributeID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->attributeID = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setAttributeLabel($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for attributeLabel');
        }
        $this->attributeLabel = (int)$val;
    }
}
