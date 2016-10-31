<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class VeRoReportItemsType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\VeROReportItemType | Contains the data and status of a reported item.
     */
    public $reportitem;
    /**
     * @param VeROReportItemType $val
     * @throws Exception
     */
    public function setReportItem($val)
    {
        $this->reportitem = (int)$val;
    }
}
