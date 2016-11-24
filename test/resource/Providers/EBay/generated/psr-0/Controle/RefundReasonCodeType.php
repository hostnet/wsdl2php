<?php

namespace Controle;

class RefundReasonCodeType
{
	const CANNOTSHIPPRODUCT = 'CannotShipProduct';
	const WRONGITEMSHIPPED  = 'WrongItemShipped';
	const ITEMBADQUALITY    = 'ItemBadQuality';
	const ITEMDAMAGED       = 'ItemDamaged';
	const BUYERREMORSE      = 'BuyerRemorse';
	const OTHER             = 'Other';
	const CUSTOMCODE        = 'CustomCode';
}
