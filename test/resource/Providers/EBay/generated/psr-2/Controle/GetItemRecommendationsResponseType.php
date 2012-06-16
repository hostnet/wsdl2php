<?php

namespace Controle;
/**
 * GetItemRecommendationsResponseType
 * GetItemRecommendations returns recommended changes or opportunities for improvement related
 * to listing data that was passed in the request. This call supports batch requests. That
 * is, it can retrieve recommendations for multiple items at once.
 */
class GetItemRecommendationsResponseType extends \Controle\AbstractResponseType {
    /**
     * @var \Controle\GetRecommendationsResponseContainerType | Specifies recommended changes or opportunities for improving the data of a single item.
     *                  If multiple items were processed, a separate GetRecommendationsResponseContainer
     *                  is returned for each item. Each container includes a user-defined correlation
     * ID                   to help you match items in the request to recommendations in the
     * response.
     */
    public $GetRecommendationsResponseContainer;
}

