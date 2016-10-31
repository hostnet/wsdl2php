<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * CategoryArrayType
 * Container for a list of categories.
 */
class CategoryArrayType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CategoryType | Describes a category that contains items that match the query.
     */
    public $category;
    /**
     * @param CategoryType $val
     * @throws Exception
     */
    public function setCategory($val)
    {
        $this->category = (int)$val;
    }
}
