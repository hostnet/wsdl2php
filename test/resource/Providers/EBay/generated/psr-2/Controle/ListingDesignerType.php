<?php

namespace Controle;

/**
 * ListingDesignerType
 * Contains the IDs for the Listing Designer theme and template (if either are used) associated
 * with an item, which can optionally be used to enhance the appearance of the item's description.
 * Cannot be used with Photo Display. With compatibility levels 439 or higher, specified in
 * PictureDetails.PhotoDisplay. With lower compatibility levels, specified in SiteHostedPictureType.PhotoDisplay
 *        or VendorHostedPictureType.PhotoDisplay.
 */
class ListingDesignerType
{
    /**
     * @var int | Identifies the Layout template to use when displaying the            item's description.
     * Call GetDescriptionTemplates for valid IDs.            Set to false in GetDescriptionTemplates
     * (or do not specify            LayoutID) to get the standard layout. If a Listing Designer
     *            layout is used (except standard layout), PhotoDisplayType must
     *  be false (or not be specified).            When relisting an item, LayoutID is removed
     * from the listing if you specify             ListingDesignerType without LayoutID. Alternatively,
     * to remove this value             when revising or relisting an item, use DeletedField.
     */
    public $layoutid;
    /**
     * @var boolean | If true, indicates that the item's picture will be enlarged to fit description
     *       of the item.
     */
    public $optimalpicturesize;
    /**
     * @var int | Unique identifier for each theme in this group. There is at least one theme in a theme
     * group.
     */
    public $themeid;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setLayoutID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->layoutid = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setOptimalPictureSize($val)
    {
        $this->optimalpicturesize = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setThemeID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->themeid = (int)$val;
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
