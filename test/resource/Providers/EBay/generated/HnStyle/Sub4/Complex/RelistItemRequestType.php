<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * RelistItemRequestType
 * Enables a seller to take a single item (or a single multi-item listing) that ended without
 * bidders or buyers and re-list it on a specified eBay site. The listing may be re-listed
 * with the same item properties as the original or the seller may change a number of the item's
 * defining properties at re-listing time. The new listing will have a different item ID than
 * the original one. RelistItem re-lists a single item (or a single multi-item listing) that
 * has already ended. To re-list multiple items (multiple listings) that have ended, execute
 * RelistItem once for each ended listing.
 */
class RelistItemRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemType | Information about the item that spawned the transaction. It is a purchase from this
     * item's listing that the transaction represents. To remove a property from an item, specify
     * it in ModifyType as a changed property, but do not give it a value in Item. Also applicable
     * to Half.com (for GetOrders).
     */
    public $Item;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ModifiedFieldType | Applicable when the ListingFlow is ReviseItem or RelistItem. Array of item properties
     * that are being changed. In release 439 and later, ModifiedFields is no longer required
     * to revise field values, but it is still supported for backward compatibility. See the
     * Developer's Guide for rules on adding, modifying, and removing values when revising
     * or relisting items.
     */
    public $ModifiedFields;
    /**
     * @var string | Specifies the name of the field to remove from a listing. Applicable when the ListingFlow
     * is ReviseItem or RelistItem. See the Developer's Guide for rules on removing values
     * when revising or relisting items. DeletedField accepts the following values for removing fields:
     * item.pictureDetails.pictureURL, item.pictureDetails.galleryURL, item.listingDesigner.themeID,
     * item.listingDesigner.layoutID, item.payPalEmailAddress, item.proximitySearchDetails.postalCode, item.shippingDetails.paymentInstructions,
     * and item.SKU. When the ListingFlow is RelistItem, the following values for DeletedField
     * are also allowed: item.charity, item.secondaryCategory, and item.subTitle. DeletedField
     * is case sensitive. The request can contain zero, one, or many instances of DeletedField.
     */
    public $DeletedField;
    // @codingStandardsIgnoreEnd

    /**
     * @param ItemType $val
     * @throws \Exception
     */
    public function setItem($val)
    {
        $this->Item = $val;
    }

    /**
     * @param ModifiedFieldType $val
     * @throws \Exception
     */
    public function setModifiedFields($val)
    {
        $this->ModifiedFields = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setDeletedField($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for DeletedField');
        }
        $this->DeletedField = $val;
    }
}
