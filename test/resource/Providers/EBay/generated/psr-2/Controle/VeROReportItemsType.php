<?php

namespace Controle;
/**
 * VeROReportItemsType
 * Container for a list of items. Can contain zero, one, or multiple ReportedItemsType  objects,
 * each of which conveys the data for one item listing.
 */
class VeROReportItemsType {
    /**
     * @var \Controle\VeROReportItemType | Contains the data and status of a reported item.
     */
    public $ReportItem;
    /**
     * @param VeROReportItemType $val
     * @throws Exception
     */
    public function setReportItem($val) {
        
        $this->ReportItem = (int)$val;
    }

}

