<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class VeRoReportItemsRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\UserIDType | User ID of the VeRO member reporting the items.
     */
    public $rightsownerid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\VeROReportItemsType | Container (packet) for items being reported. You can report the same item  more than
     * once in a packet if a different reason code is used each time.
     */
    public $reportitems;
    /**
     * @param UserIDType $val
     * @throws Exception
     */
    public function setRightsOwnerID($val)
    {
        $this->rightsownerid = (int)$val;
    }

    /**
     * @param VeROReportItemsType $val
     * @throws Exception
     */
    public function setReportItems($val)
    {
        $this->reportitems = (int)$val;
    }
}
