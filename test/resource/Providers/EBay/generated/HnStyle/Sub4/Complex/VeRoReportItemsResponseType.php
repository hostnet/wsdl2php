<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class VeRoReportItemsResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    /**
     * @var long | A unique packet identifier for the items reported.
     */
    public $veroreportpacketid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\VeROReportPacketStatusCodeType | The processing status of the packet.
     */
    public $veroreportpacketstatus;
    /**
     * @param long $val
     * @throws Exception
     */
    public function setVeROReportPacketID($val)
    {
        $this->veroreportpacketid = (int)$val;
    }

    /**
     * @param VeROReportPacketStatusCodeType $val
     * @throws Exception
     */
    public function setVeROReportPacketStatus($val)
    {
        $this->veroreportpacketstatus = (int)$val;
    }
}
