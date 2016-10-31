<?php

namespace Controle\sub1\sub2;

/**
 * CharityType
 * Identifies a Giving Works listing and benefiting nonprofit charity organization. Currently
 * supported through the US and eBay Motors sites only. The Ad Format and Mature Audiences
 * categories are not supported. Not applicable for US eBay Motors, international, Real Estate,
 * and Tickets.
 */
class CharityType
{
	/**
	 * @var string | The name of the benefiting nonprofit charity organization selected by the charity seller.
	 */
	public $charityname;
	/**
	 * @var int | A unique identification number assigned to a nonprofit charity organization by the dedicated
	 * provider of eBay Giving Works. Being superseded by CharityID. Max 10 digits.
	 */
	public $charitynumber;
	/**
	 * @var float | The percentage of the purchase price that the seller chooses to donate to the selected
	 * nonprofit organization. This percentage is displayed in the Giving Works item listing.
	 * Possible values: 10.0 to 100.0. Percentages must increment by 5.0. Minimum donation percentages
	 * may be required for Giving Works listings, see http://pages.ebay.com/help/sell/selling-nonprofit.html
	 * for details. DonationPercent is required input when listing Giving Works items.
	 */
	public $donationpercent;
	/**
	 * @var string | A unique identification number assigned by eBay to registered nonprofit charity organizations.
	 * Required input when listing Giving Works items.
	 */
	public $charityid;
	/**
	 * @var string | The stated mission of the nonprofit charity organization. This mission is displayed in
	 * the Giving Works item listing.
	 */
	public $mission;
	/**
	 * @var string | The URL of the logo to include in the customized email.
	 */
	public $logourl;
	/**
	 * @var \Controle\sub1\sub2\CharityStatusCodeType | Indicates the user's registration/user status. To be eligible to list on Express, a seller's
	 * status must be Confirmed. See "eBay Express" in the eBay Web Services guide.
	 */
	public $status;
	/**
	 * @var boolean | If true, indicates that the seller has chosen to use eBay Giving Works to donate a percentage
	 * of the item's purchase price to a selected nonprofit organization.
	 */
	public $charitylisting;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCharityName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CharityName');
        }
        $this->charityname = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCharityNumber($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->charitynumber = (int)$val;
	}

	/**
	 * @param float $val
	 * @throws Exception
	 */
	public function setDonationPercent($val)
	{
        $this->donationpercent = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCharityID($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CharityID');
        }
        $this->charityid = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setMission($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Mission');
        }
        $this->mission = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setLogoURL($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for LogoURL');
        }
        $this->logourl = (int)$val;
	}

	/**
	 * @param CharityStatusCodeType $val
	 * @throws Exception
	 */
	public function setStatus($val)
	{
        $this->status = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setCharityListing($val)
	{
        $this->charitylisting = (int)$val;
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
