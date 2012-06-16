<?php

namespace Controle;
/**
 * SuggestedCategoryArrayType
 * Contains an array of categories that contain listings with     specified keywords in their
 * titles or descriptions. The array     can contain up to 10 categories.
 */
class SuggestedCategoryArrayType {
    /**
     * @var \Controle\SuggestedCategoryType | Describes a category that contains listings that match    specified keywords in the
     * query. Returned if a category matches the query.
     */
    public $SuggestedCategory;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}

