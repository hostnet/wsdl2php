<?php

namespace Controle;
/**
 * CharityInfoType
 * Contains information about a nonprofit charity organization.
 */
class CharityInfoType {
    /**
     * @var string | Name of the eBay Store. The name is shown at the top of the Store page.
     */
    public $Name;
    /**
     * @var string | The stated mission of the nonprofit charity organization. This mission is displayed
     * in the Giving Works item listing.
     */
    public $Mission;
    /**
     * @var \Controle\anyURI | The URL of the logo to include in the customized email.
     */
    public $LogoURL;
    /**
     * @var \Controle\CharityStatusCodeType | Indicates the user's registration/user status. To be eligible to list on Express, a
     * seller's status must be Confirmed. See "eBay Express" in the eBay Web Services guide.
     */
    public $Status;
    /**
     * @var string | Keyword string to be used for search purposes.
     */
    public $SearchableString;
    /**
     * @var int | Region that the nonprofit charity organization is associated with. A specific nonprofit
     * charity organization may be associated with only one region. Meaning of input values
     * differs depending on the site. See GetCharities in the API Developer's Guide for the
     * meaning of each input/output value. CharityRegion input value must be valid for that
     * SiteID.
     */
    public $CharityRegion;
    /**
     * @var int | Domain (mission area) that a nonprofit charity organization belongs to. Nonprofit charity
     * organizations may belong to multiple mission areas. Meaning of input values differs
     * depending on the site. See GetCharities in the API Developer's Guide for the meaning
     * of each input/output value. CharityDomain input value must be valid for that SiteID.
     */
    public $CharityDomain;
    /**
     * @var string | A unique identification number assigned by eBay to registered nonprofit charity organizations.
     * Required input when listing Giving Works items.
     */
    public $CharityID;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @var string
     */
    public $id;
}

