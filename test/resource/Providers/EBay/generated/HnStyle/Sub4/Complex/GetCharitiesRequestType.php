<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetCharitiesRequestType
 * Searches for nonprofit charity organizations that meet the criteria specified in the request.
 */
class GetCharitiesRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | A unique identification number assigned by eBay to registered nonprofit charity organizations.
     * Required input when listing Giving Works items.
     */
    public $CharityID;
    /**
     * @var string | The name of the benefiting nonprofit charity organization selected by the charity seller.
     */
    public $CharityName;
    /**
     * @var string | One or more keywords to search for when using the Suggested Attributes engine. Required
     * when SuggestedAttributes is specified as the recommendation engine (including when no
     * recommendation engines are specified). Only the listing title is searched. The words
     * "and" and "or" are treated like any other word. Blank searches are not allowed (and
     * result in a warning).
     */
    public $Query;
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
     * @var boolean | Used with Query to search for charity nonprofit organizations. A value of true will
     * search the Mission field as well as the CharityName field for a string specified in
     * Query.
     */
    public $IncludeDescription;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\StringMatchCodeType | Indicates the type of string matching to use when a value is submitted in CharityName.
     * If no value is specified, default behavior is "StartsWith." Does not apply to Query.
     */
    public $MatchType;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCharityID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CharityID');
        }
        $this->CharityID = ()$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCharityName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CharityName');
        }
        $this->CharityName = ()$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setQuery($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Query');
        }
        $this->Query = ()$val;
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
        $this->CharityRegion = ()$val;
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
        $this->CharityDomain = ()$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setIncludeDescription($val)
    {
        $this->IncludeDescription = ()$val;
    }

    /**
     * @param StringMatchCodeType $val
     * @throws Exception
     */
    public function setMatchType($val)
    {
        $this->MatchType = ()$val;
    }
}
