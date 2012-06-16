<?php

namespace Controle;
/**
 * CharityType
 * Identifies a Giving Works listing and benefiting nonprofit charity organization. Currently
 * supported through the US and eBay Motors sites only. The Ad Format and Mature Audiences
 * categories are not supported. Not applicable for US eBay Motors, international, Real Estate,
 * and Tickets.
 */
class CharityType {
    /**
     * @var string | The name of the benefiting nonprofit charity organization selected by the charity seller.
     */
    public $CharityName;
    /**
     * @var int | A unique identification number assigned to a nonprofit charity organization by the dedicated
     * provider of eBay Giving Works. Being superseded by CharityID. Max 10 digits.
     */
    public $CharityNumber;
    /**
     * @var float | The percentage of the purchase price that the seller chooses to donate to the selected
     * nonprofit organization. This percentage is displayed in the Giving Works item listing.
     * Possible values: 10.0 to 100.0. Percentages must increment by 5.0. Minimum donation percentages
     * may be required for Giving Works listings, see http://pages.ebay.com/help/sell/selling-nonprofit.html
     * for details. DonationPercent is required input when listing Giving Works items.
     */
    public $DonationPercent;
    /**
     * @var string | A unique identification number assigned by eBay to registered nonprofit charity organizations.
     * Required input when listing Giving Works items.
     */
    public $CharityID;
    /**
     * @var string | The stated mission of the nonprofit charity organization. This mission is displayed
     * in the Giving Works item listing.
     */
    public $Mission;
    /**
     * @var string | The URL of the logo to include in the customized email.
     */
    public $LogoURL;
    /**
     * @var \Controle\CharityStatusCodeType | Indicates the user's registration/user status. To be eligible to list on Express, a
     * seller's status must be Confirmed. See "eBay Express" in the eBay Web Services guide.
     */
    public $Status;
    /**
     * @var boolean | If true, indicates that the seller has chosen to use eBay Giving Works to donate a percentage
     * of the item's purchase price to a selected nonprofit organization.
     */
    public $CharityListing;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}

