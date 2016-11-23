<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * CrossPromotionPreferencesType
 * Contains preferences describing how items similar to the one the user is  presently viewing
 * are promoted.
 */
class CrossPromotionPreferencesType
{
    // @codingStandardsIgnoreStart
    /**
     * @var boolean | (For eBay store owners only) Specifies whether cross-promotions are enabled for the
     * seller's listings.
     */
    public $CrossPromotionEnabled;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemFormatSortFilterCodeType | (For eBay store owners only) Specifies which items should be shown in cross-sell promotions
     * (such as Buy It Now or Store Inventory items) and in which sequence.
     */
    public $CrossSellItemFormatSortFilter;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\GallerySortFilterCodeType | (For eBay store owners only) Specifies whether to display only items with gallery images
     * and whether they should precede other items in cross-sell promotions.
     */
    public $CrossSellGallerySortFilter;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemSortFilterCodeType | (For eBay store owners only) Specifies how to sort items displayed in a cross-sell promotion.
     */
    public $CrossSellItemSortFilter;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemFormatSortFilterCodeType | (For eBay store owners only) Specifies which items (such as Buy It Now or Store Inventory
     * items) should be shown in upsell promotions and in which sequence.
     */
    public $UpSellItemFormatSortFilter;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\GallerySortFilterCodeType | (For eBay store owners only) Specifies whether to display only items with gallery images
     * in upsell promotions and whether they should precede other items.
     */
    public $UpSellGallerySortFilter;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemSortFilterCodeType | (For eBay store owners only) Specifies how to sort items used in an upsell promotion.
     */
    public $UpSellItemSortFilter;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setCrossPromotionEnabled($val)
    {
        $this->CrossPromotionEnabled = (int)$val;
    }

    /**
     * @param ItemFormatSortFilterCodeType $val
     * @throws Exception
     */
    public function setCrossSellItemFormatSortFilter($val)
    {
        $this->CrossSellItemFormatSortFilter = (int)$val;
    }

    /**
     * @param GallerySortFilterCodeType $val
     * @throws Exception
     */
    public function setCrossSellGallerySortFilter($val)
    {
        $this->CrossSellGallerySortFilter = (int)$val;
    }

    /**
     * @param ItemSortFilterCodeType $val
     * @throws Exception
     */
    public function setCrossSellItemSortFilter($val)
    {
        $this->CrossSellItemSortFilter = (int)$val;
    }

    /**
     * @param ItemFormatSortFilterCodeType $val
     * @throws Exception
     */
    public function setUpSellItemFormatSortFilter($val)
    {
        $this->UpSellItemFormatSortFilter = (int)$val;
    }

    /**
     * @param GallerySortFilterCodeType $val
     * @throws Exception
     */
    public function setUpSellGallerySortFilter($val)
    {
        $this->UpSellGallerySortFilter = (int)$val;
    }

    /**
     * @param ItemSortFilterCodeType $val
     * @throws Exception
     */
    public function setUpSellItemSortFilter($val)
    {
        $this->UpSellItemSortFilter = (int)$val;
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
