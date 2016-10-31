<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * CrossPromotionPreferencesType
 * Contains preferences describing how items similar to the one the user is  presently viewing
 * are promoted.
 */
class CrossPromotionPreferencesType
{
    /**
     * @var boolean | (For eBay store owners only) Specifies whether cross-promotions are enabled for the
     * seller's listings.
     */
    public $crosspromotionenabled;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemFormatSortFilterCodeType | (For eBay store owners only) Specifies which items should be shown in cross-sell promotions
     * (such as Buy It Now or Store Inventory items) and in which sequence.
     */
    public $crosssellitemformatsortfilter;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\GallerySortFilterCodeType | (For eBay store owners only) Specifies whether to display only items with gallery images
     * and whether they should precede other items in cross-sell promotions.
     */
    public $crosssellgallerysortfilter;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemSortFilterCodeType | (For eBay store owners only) Specifies how to sort items displayed in a cross-sell promotion.
     */
    public $crosssellitemsortfilter;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemFormatSortFilterCodeType | (For eBay store owners only) Specifies which items (such as Buy It Now or Store Inventory
     * items) should be shown in upsell promotions and in which sequence.
     */
    public $upsellitemformatsortfilter;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\GallerySortFilterCodeType | (For eBay store owners only) Specifies whether to display only items with gallery images
     * in upsell promotions and whether they should precede other items.
     */
    public $upsellgallerysortfilter;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemSortFilterCodeType | (For eBay store owners only) Specifies how to sort items used in an upsell promotion.
     */
    public $upsellitemsortfilter;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setCrossPromotionEnabled($val)
    {
        $this->crosspromotionenabled = (int)$val;
    }

    /**
     * @param ItemFormatSortFilterCodeType $val
     * @throws Exception
     */
    public function setCrossSellItemFormatSortFilter($val)
    {
        $this->crosssellitemformatsortfilter = (int)$val;
    }

    /**
     * @param GallerySortFilterCodeType $val
     * @throws Exception
     */
    public function setCrossSellGallerySortFilter($val)
    {
        $this->crosssellgallerysortfilter = (int)$val;
    }

    /**
     * @param ItemSortFilterCodeType $val
     * @throws Exception
     */
    public function setCrossSellItemSortFilter($val)
    {
        $this->crosssellitemsortfilter = (int)$val;
    }

    /**
     * @param ItemFormatSortFilterCodeType $val
     * @throws Exception
     */
    public function setUpSellItemFormatSortFilter($val)
    {
        $this->upsellitemformatsortfilter = (int)$val;
    }

    /**
     * @param GallerySortFilterCodeType $val
     * @throws Exception
     */
    public function setUpSellGallerySortFilter($val)
    {
        $this->upsellgallerysortfilter = (int)$val;
    }

    /**
     * @param ItemSortFilterCodeType $val
     * @throws Exception
     */
    public function setUpSellItemSortFilter($val)
    {
        $this->upsellitemsortfilter = (int)$val;
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
