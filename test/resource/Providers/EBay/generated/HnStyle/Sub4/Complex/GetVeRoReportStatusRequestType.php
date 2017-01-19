<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetVeRoReportStatusRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var long | A unique packet identifier for the items reported.
     */
    public $VeROReportPacketID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $ItemID;
    /**
     * @var boolean | Set to true to return reported item details when you specify VeROReportPacketID in the
     * request.
     */
    public $IncludeReportedItemDetails;
    /**
     * @var dateTime | Limits returned items to only those that were submited on or after the date-time specified.
     * If specified, TimeTo must also be specified. Express the date-time in the format YYYY-MM-DD
     * HH:MM:SS, and in GMT. (For information on how to convert between your local time zone and
     * GMT, see Time Values Note.) Applies to items reported with VeROReportItems or by other
     * means (e.g., through the web flow). Infringement reporting data is maintained for two
     * years after the date of submission. This field is ignored if VeROReportPacketID or ItemID
     * is specified.
     */
    public $TimeFrom;
    /**
     * @var dateTime | Limits returned items to only those that were submited on or before the date-time specified.
     * If specified, TimeFrom must also be specified. Express date-time in the format YYYY-MM-DD
     * HH:MM:SS, and in GMT. (For information on how to convert between your local time zone and
     * GMT, see Time Values Note.) Applies to items reported with VeROReportItems or by other
     * means (e.g., through the web flow). Infringement reporting data is maintained for two
     * years after the date of submission. This field is ignored if VeROReportPacketID or ItemID
     * is specified.
     */
    public $TimeTo;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaginationType | Pagination instruction that specifies the virtual page of data to return
     * per search request. Default page number is 0 (the first page).            Specify a
     * page number of 0 or a positive value lower            than the approximate number of
     * pages available.
     */
    public $Pagination;
    // @codingStandardsIgnoreEnd

    /**
     * @param long $val
     * @throws \Exception
     */
    public function setVeROReportPacketID($val)
    {
        $this->VeROReportPacketID = $val;
    }

    /**
     * @param ItemIDType $val
     * @throws \Exception
     */
    public function setItemID($val)
    {
        $this->ItemID = $val;
    }

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setIncludeReportedItemDetails($val)
    {
        $this->IncludeReportedItemDetails = $val;
    }

    /**
     * @param dateTime $val
     * @throws \Exception
     */
    public function setTimeFrom($val)
    {
        $this->TimeFrom = $val;
    }

    /**
     * @param dateTime $val
     * @throws \Exception
     */
    public function setTimeTo($val)
    {
        $this->TimeTo = $val;
    }

    /**
     * @param PaginationType $val
     * @throws \Exception
     */
    public function setPagination($val)
    {
        $this->Pagination = $val;
    }
}
