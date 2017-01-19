<?php

namespace Controle;

/**
 * StoreCustomCategoryType
 * Configuration of a store custom category.
 */
class StoreCustomCategoryType
{
    // @codingStandardsIgnoreStart
    /**
     * @var int | ID of the category in which the Want It Now post is listed.
     */
    public $CategoryID;
    /**
     * @var string | Name of the eBay Store. The name is shown at the top of the Store page.
     */
    public $Name;
    /**
     * @var int | Order in which the page is displayed in the list of custom pages.
     */
    public $Order;
    /**
     * @var \Controle\StoreCustomCategoryType | Container for store custom subcategory configuration information. This field is being
     * deprecated. Use ChildCategory to specify subcategories.
     */
    public $ChildrenCategories;
    /**
     * @var \Controle\StoreCustomCategoryType | Describes the configuration of a store custom subcategory. Stores support three levels
     * of categories.
     */
    public $ChildCategory;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setCategoryID($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->CategoryID = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setName($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Name');
        }
        $this->Name = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setOrder($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Order = $val;
    }

    /**
     * @param StoreCustomCategoryType $val
     * @throws \Exception
     */
    public function setChildrenCategories($val)
    {
        $this->ChildrenCategories = $val;
    }

    /**
     * @param StoreCustomCategoryType $val
     * @throws \Exception
     */
    public function setChildCategory($val)
    {
        $this->ChildCategory = $val;
    }

    /**
     * @param <anyXML> $val
     * @throws \Exception
     */
    public function setAny($val)
    {
        $this->any = $val;
    }
}
