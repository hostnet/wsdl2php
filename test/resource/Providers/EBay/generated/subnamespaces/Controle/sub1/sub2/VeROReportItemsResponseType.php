<?php

namespace Controle\sub1\sub2;
/**
 * VeROReportItemsResponseType
 * Contains a packet ID and status for the items reported by the VeRO Program member.
 */
class VeROReportItemsResponseType extends \Controle\sub1\sub2\AbstractResponseType {
	/**
	 * @var long | A unique packet identifier for the items reported.
	 */
	public $VeROReportPacketID;
	/**
	 * @var \Controle\sub1\sub2\VeROReportPacketStatusCodeType | The processing status of the packet.
	 */
	public $VeROReportPacketStatus;
}

