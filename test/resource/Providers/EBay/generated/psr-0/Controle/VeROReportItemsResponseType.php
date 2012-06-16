<?php

namespace Controle;
/**
 * VeROReportItemsResponseType
 * Contains a packet ID and status for the items reported by the VeRO Program member.
 */
class VeROReportItemsResponseType extends \Controle\AbstractResponseType {
	/**
	 * @var long | A unique packet identifier for the items reported.
	 */
	public $VeROReportPacketID;
	/**
	 * @var \Controle\VeROReportPacketStatusCodeType | The processing status of the packet.
	 */
	public $VeROReportPacketStatus;
}

