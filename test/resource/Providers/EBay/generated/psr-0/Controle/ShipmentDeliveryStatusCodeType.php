<?php

namespace Controle;

class ShipmentDeliveryStatusCodeType
{
	const CREATED      = 'Created';
	const DROPPEDOFF   = 'DroppedOff';
	const INTRANSIT    = 'InTransit';
	const DELIVERED    = 'Delivered';
	const RETURNED     = 'Returned';
	const CANCELED     = 'Canceled';
	const LABELPRINTED = 'LabelPrinted';
	const CUSTOMCODE   = 'CustomCode';
}
