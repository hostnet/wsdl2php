<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * CategoryArrayType
 * Container for a list of categories.
 */
class CategoryArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CategoryType | Describes a category that contains items that match the query.
     */
    public $Category;
    // @codingStandardsIgnoreEnd

    /**
     * @param CategoryType $val
     * @throws Exception
     */
    public function setCategory($val)
    {
        $this->Category = $val;
    }
}
