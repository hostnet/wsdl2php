<?php

namespace Controle\sub1\sub2;
/**
 * GetItemRecommendationsResponseType
 * GetItemRecommendations returns recommended changes or opportunities for improvement related
 * to listing data that was passed in the request. This call supports batch requests. That
 * is, it can retrieve recommendations for multiple items at once.
 */
class GetItemRecommendationsResponseType extends \Controle\sub1\sub2\AbstractResponseType {
	/**
	 * @var \Controle\sub1\sub2\GetRecommendationsResponseContainerType | Specifies recommended changes or opportunities for improving the data of a single item.
	 *                  If multiple items were processed, a separate GetRecommendationsResponseContainer
	 *                  is returned for each item. Each container includes a user-defined correlation
	 * ID                   to help you match items in the request to recommendations in the response.
	 */
	public $GetRecommendationsResponseContainer;
	/**
	 * @param GetRecommendationsResponseContainerType $val
	 * @throws Exception
	 */
	public function setGetRecommendationsResponseContainer($val) {
		
		$this->GetRecommendationsResponseContainer = (int)$val;
	}

}

