<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class VeRoReportedItemDetailsType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\VeROReportedItemType | Contains the data and status of a reported item.
     */
    public $ReportedItem;
    // @codingStandardsIgnoreEnd

    /**
     * @param VeROReportedItemType $val
     * @throws Exception
     */
    public function setReportedItem($val)
    {
        $this->ReportedItem = $val;
    }
}
