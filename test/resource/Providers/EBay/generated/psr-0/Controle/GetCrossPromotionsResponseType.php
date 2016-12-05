<?php

namespace Controle;

/**
 * GetCrossPromotionsResponseType
 * Returns a list of either upsell or cross-sell items for a given item ID. The list can be
 * filtered by the viewer's role, either buyer or seller.
 */
class GetCrossPromotionsResponseType extends
 \Controle\AbstractResponseType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\CrossPromotionsType | Container for cross-promoted items related to a specific item ID. The items are either
	 * upsell or cross-sell, according to the promotion method passed in the request. Not applicable
	 * to Half.com.
	 */
	public $CrossPromotion;
	// @codingStandardsIgnoreEnd

	/**
	 * @param CrossPromotionsType $val
	 * @throws Exception
	 */
	public function setCrossPromotion($val)
	{
        $this->CrossPromotion = (CrossPromotionsType)$val;
	}
}
