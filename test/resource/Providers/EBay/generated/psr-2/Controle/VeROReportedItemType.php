<?php

namespace Controle;
/**
 * VeROReportedItemType
 * A container for item and VeROReportedItem's.
 */
class VeROReportedItemType {
    /**
     * @var \Controle\ItemIDType | The item ID of the item reported for infringment.
     */
    public $ItemID;
    /**
     * @var \Controle\VeROItemStatusCodeType | The VeRO reporting status for a given item.
     */
    public $ItemStatus;
    /**
     * @var string | The explanation entered by eBay when an item reported for infringement is given a status
     * of SubmissionFailed or ClarificationRequired.
     */
    public $ItemReasonForFailure;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val) {
        
        $this->ItemID = (int)$val;
    }

    /**
     * @param VeROItemStatusCodeType $val
     * @throws Exception
     */
    public function setItemStatus($val) {
        
        $this->ItemStatus = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setItemReasonForFailure($val) {
        if(!is_string($val)) throw new Exception('POJO Proxy need a string for ItemReasonForFailure');
        $this->ItemReasonForFailure = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val) {
        
        $this->any = (int)$val;
    }

}

