<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * SuggestedCategoryArrayType
 * Contains an array of categories that contain listings with     specified keywords in their
 * titles or descriptions. The array     can contain up to 10 categories.
 */
class SuggestedCategoryArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SuggestedCategoryType | Describes a category that contains listings that match    specified keywords in the
     * query. Returned if a category matches the query.
     */
    public $SuggestedCategory;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param SuggestedCategoryType $val
     * @throws Exception
     */
    public function setSuggestedCategory($val)
    {
        $this->SuggestedCategory = $val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = $val;
    }
}
