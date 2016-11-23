<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ModifiedFieldType
 * Identifies the fields that are being modified. Only applies when revising and relisting
 * items. To remove a property from an object, specify it in ModifiedFieldType, but do not
 * specify a value in the object type (for example, ItemType).
 */
class ModifiedFieldType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | The name of the field that is being modified. Use only first-level properties. The first
     * letter of each node in the field is case insensitive, so item.startPrice is the same
     * as Item.StartPrice. In RelistItem, this is required if you are also modifying fields
     * of the item that you are relisting.
     */
    public $Field;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ModifyCodeType | Instruction describing the nature of the modification. In RelistItem, this is required
     * if you are modifying fields of the item that you are relisting. See the ModifyCodeList
     * for valid values.
     */
    public $ModifyType;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setField($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Field');
        }
        $this->Field = (int)$val;
    }

    /**
     * @param ModifyCodeType $val
     * @throws Exception
     */
    public function setModifyType($val)
    {
        $this->ModifyType = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }
}
