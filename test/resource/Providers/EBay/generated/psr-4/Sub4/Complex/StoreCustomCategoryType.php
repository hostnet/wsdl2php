<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * StoreCustomCategoryType
 * Configuration of a store custom category.
 */
class StoreCustomCategoryType
{
    /**
     * @var int | ID of the category in which the Want It Now post is listed.
     */
    public $categoryid;
    /**
     * @var string | Name of the eBay Store. The name is shown at the top of the Store page.
     */
    public $name;
    /**
     * @var int | Order in which the page is displayed in the list of custom pages.
     */
    public $order;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\StoreCustomCategoryType | Container for store custom subcategory configuration information. This field is being
     * deprecated. Use ChildCategory to specify subcategories.
     */
    public $childrencategories;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\StoreCustomCategoryType | Describes the configuration of a store custom subcategory. Stores support three levels
     * of categories.
     */
    public $childcategory;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setCategoryID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->categoryid = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Name');
        }
        $this->name = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setOrder($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->order = (int)$val;
    }

    /**
     * @param StoreCustomCategoryType $val
     * @throws Exception
     */
    public function setChildrenCategories($val)
    {
        $this->childrencategories = (int)$val;
    }

    /**
     * @param StoreCustomCategoryType $val
     * @throws Exception
     */
    public function setChildCategory($val)
    {
        $this->childcategory = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }
}
