<?php

namespace Controle;

/**
 * CharityInfoType
 * Contains information about a nonprofit charity organization.
 */
class CharityInfoType
{
    /**
     * @var string | Name of the eBay Store. The name is shown at the top of the Store page.
     */
    public $name;
    /**
     * @var string | The stated mission of the nonprofit charity organization. This mission is displayed
     * in the Giving Works item listing.
     */
    public $mission;
    /**
     * @var \Controle\anyURI | The URL of the logo to include in the customized email.
     */
    public $logourl;
    /**
     * @var \Controle\CharityStatusCodeType | Indicates the user's registration/user status. To be eligible to list on Express, a
     * seller's status must be Confirmed. See "eBay Express" in the eBay Web Services guide.
     */
    public $status;
    /**
     * @var string | Keyword string to be used for search purposes.
     */
    public $searchablestring;
    /**
     * @var int | Region that the nonprofit charity organization is associated with. A specific nonprofit
     * charity organization may be associated with only one region. Meaning of input values
     * differs depending on the site. See GetCharities in the API Developer's Guide for the
     * meaning of each input/output value. CharityRegion input value must be valid for that
     * SiteID.
     */
    public $charityregion;
    /**
     * @var int | Domain (mission area) that a nonprofit charity organization belongs to. Nonprofit charity
     * organizations may belong to multiple mission areas. Meaning of input values differs
     * depending on the site. See GetCharities in the API Developer's Guide for the meaning
     * of each input/output value. CharityDomain input value must be valid for that SiteID.
     */
    public $charitydomain;
    /**
     * @var string | A unique identification number assigned by eBay to registered nonprofit charity organizations.
     * Required input when listing Giving Works items.
     */
    public $charityid;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @var string
     */
    public $id;
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
     * @param anyURI $val
     * @throws Exception
     */
    public function setLogoURL($val)
    {
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
     * @param string $val
     * @throws Exception
     */
    public function setSearchableString($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SearchableString');
        }
        $this->searchablestring = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setCharityRegion($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->charityregion = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setCharityDomain($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->charitydomain = (int)$val;
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
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for id');
        }
        $this->id = (int)$val;
    }
}
