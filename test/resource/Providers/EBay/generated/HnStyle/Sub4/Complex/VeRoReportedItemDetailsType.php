<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class VeRoReportedItemDetailsType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\VeROReportedItemType | Contains the data and status of a reported item.
     */
    public $reporteditem;
    /**
     * @param VeROReportedItemType $val
     * @throws Exception
     */
    public function setReportedItem($val)
    {
        $this->reporteditem = (int)$val;
    }
}
