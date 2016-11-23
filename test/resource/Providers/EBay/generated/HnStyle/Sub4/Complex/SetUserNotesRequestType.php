<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * SetUserNotesRequestType
 * Enables users to add, replace, and delete My eBay notes for items that are being tracked
 * in the My eBay All Selling and All Buying areas.
 */
class SetUserNotesRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $ItemID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SetUserNotesActionCodeType | Indicates the type of offer being made on the specified listing. Valid values are enumerated
     * in the BidActionCodeType code list.
     */
    public $Action;
    /**
     * @var string | Text of the note. Maximum 250 characters. Required only if the Action is AddOrUpdate.
     * This note text will completely replace any existing My eBay note for the specified item.
     */
    public $NoteText;
    // @codingStandardsIgnoreEnd

    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        $this->ItemID = (int)$val;
    }

    /**
     * @param SetUserNotesActionCodeType $val
     * @throws Exception
     */
    public function setAction($val)
    {
        $this->Action = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setNoteText($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for NoteText');
        }
        $this->NoteText = (int)$val;
    }
}
