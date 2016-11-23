<?php

namespace Controle;

/**
 * GetSellerEventsResponseType
 * Contains the items returned by the call. Items for which a seller event has          occurred
 * (and that meet any filters specified as input) are returned in an          ItemArrayType
 * object, within which are zero, one, or multiple ItemType objects.          Each ItemType
 * object contains the detail data for one item listing.
 */
class GetSellerEventsResponseType extends
 \Controle\AbstractResponseType
{
    // @codingStandardsIgnoreStart
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
     * @var \Controle\ItemArrayType | Contains a list of Item types.
     */
    public $ItemArray;
    // @codingStandardsIgnoreEnd

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setTimeTo($val)
    {
        $this->TimeTo = (int)$val;
    }

    /**
     * @param ItemArrayType $val
     * @throws Exception
     */
    public function setItemArray($val)
    {
        $this->ItemArray = (int)$val;
    }
}
