<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class VeRoReportedItemType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $itemid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\VeROItemStatusCodeType | The VeRO reporting status for a given item.
     */
    public $itemstatus;
    /**
     * @var string | The explanation entered by eBay when an item reported for infringement is given a status
     * of SubmissionFailed or ClarificationRequired.
     */
    public $itemreasonforfailure;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        $this->itemid = (int)$val;
    }

    /**
     * @param VeROItemStatusCodeType $val
     * @throws Exception
     */
    public function setItemStatus($val)
    {
        $this->itemstatus = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setItemReasonForFailure($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ItemReasonForFailure');
        }
        $this->itemreasonforfailure = (int)$val;
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