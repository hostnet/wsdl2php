<?php

namespace Controle;
class ShipmentDeliveryStatusCodeType {
	const Created = 'Created';
	const DroppedOff = 'DroppedOff';
	const InTransit = 'InTransit';
	const Delivered = 'Delivered';
	const Returned = 'Returned';
	const Canceled = 'Canceled';
	const LabelPrinted = 'LabelPrinted';
	const CustomCode = 'CustomCode';
}
