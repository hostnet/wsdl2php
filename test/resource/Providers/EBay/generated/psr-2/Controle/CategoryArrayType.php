<?php

namespace Controle;
/**
 * CategoryArrayType
 * Container for a list of categories.
 */
class CategoryArrayType {
    /**
     * @var \Controle\CategoryType | Describes a category that contains items that match the query.
     */
    public $Category;
    /**
     * @param CategoryType $val
     * @throws Exception
     */
    public function setCategory($val) {
        
        $this->Category = (int)$val;
    }

}

