<?php

namespace Controle;
/**
 * ModifiedFieldType
 * Identifies the fields that are being modified. Only applies when revising and relisting
 * items. To remove a property from an object, specify it in ModifiedFieldType, but do not
 * specify a value in the object type (for example, ItemType).
 */
class ModifiedFieldType {
    /**
     * @var string | The name of the field that is being modified. Use only first-level properties. The first
     * letter of each node in the field is case insensitive, so item.startPrice is the same
     * as Item.StartPrice. In RelistItem, this is required if you are also modifying fields
     * of the item that you are relisting.
     */
    public $Field;
    /**
     * @var \Controle\ModifyCodeType | Instruction describing the nature of the modification. In RelistItem, this is required
     * if you are modifying fields of the item that you are relisting. See the ModifyCodeList
     * for valid values.
     */
    public $ModifyType;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}
