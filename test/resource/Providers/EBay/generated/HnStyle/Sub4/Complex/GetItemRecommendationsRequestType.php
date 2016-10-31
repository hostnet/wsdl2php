<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetItemRecommendationsRequestType
 * Examines potential item data that a seller has specified and returns recommended changes
 * or opportunities for improvement. The types of recommendations returned for a given item
 * can be configured by choosing one or more recommendation engines in the request. This call
 * supports batch requests. That is, you can retrieve recommendations for multiple items at
 * once.
 */
class GetItemRecommendationsRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\GetRecommendationsRequestContainerType | Specifies the data for a single item and configures the recommendation engines to use when
     * processing the item. To retrieve recommendations for multiple items, pass a separate GetRecommendationsRequestContainer
     * for each item. In this case, pass a user-defined correlation ID for each item to identify
     * the matching response.
     */
    public $getrecommendationsrequestcontainer;
    /**
     * @param GetRecommendationsRequestContainerType $val
     * @throws Exception
     */
    public function setGetRecommendationsRequestContainer($val)
    {
        $this->getrecommendationsrequestcontainer = (int)$val;
    }
}
