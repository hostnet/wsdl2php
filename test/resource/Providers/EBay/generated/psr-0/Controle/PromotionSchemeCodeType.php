<?php

namespace Controle;

class PromotionSchemeCodeType
{
	const ITEMTOITEM            = 'ItemToItem';
	const ITEMTOSTORECAT        = 'ItemToStoreCat';
	const STORETOSTORECAT       = 'StoreToStoreCat';
	const ITEMTODEFAULTRULE     = 'ItemToDefaultRule';
	const DEFAULTRULE           = 'DefaultRule';
	const CATEGORYPROXIMITY     = 'CategoryProximity';
	const RELATEDCATEGORYRULE   = 'RelatedCategoryRule';
	const DEFAULTUPSELLLOGIC    = 'DefaultUpSellLogic';
	const DEFAULTCROSSSELLLOGIC = 'DefaultCrossSellLogic';
	const CUSTOMCODE            = 'CustomCode';
}
