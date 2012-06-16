<?php

namespace Controle;
/**
 * GetSuggestedCategoriesResponseType
 * Returns a list of categories with the highest number of listings whose titles or descriptions
 * contain the keywords specified in a GetSuggestedCategoriesRequest.
 */
class GetSuggestedCategoriesResponseType extends \Controle\AbstractResponseType {
    /**
     * @var \Controle\SuggestedCategoryArrayType | Contains the categories that contain listings that match the query string in the request.
     * The array can have up to 10 categories. Not returned if no categories match the query
     * in the request.
     */
    public $SuggestedCategoryArray;
    /**
     * @var int | Indicates the number of categories in the array.
     */
    public $CategoryCount;
}

