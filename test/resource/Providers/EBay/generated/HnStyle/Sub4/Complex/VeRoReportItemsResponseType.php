<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class VeRoReportItemsResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var long | A unique packet identifier for the items reported.
     */
    public $VeROReportPacketID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\VeROReportPacketStatusCodeType | The processing status of the packet.
     */
    public $VeROReportPacketStatus;
    // @codingStandardsIgnoreEnd

    /**
     * @param long $val
     * @throws Exception
     */
    public function setVeROReportPacketID($val)
    {
        $this->VeROReportPacketID = ()$val;
    }

    /**
     * @param VeROReportPacketStatusCodeType $val
     * @throws Exception
     */
    public function setVeROReportPacketStatus($val)
    {
        $this->VeROReportPacketStatus = ()$val;
    }
}
