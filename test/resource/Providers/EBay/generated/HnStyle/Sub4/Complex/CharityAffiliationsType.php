<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * CharityAffiliationsType
 * Lists the nonprofit charity organization affiliations for a specified user.
 */
class CharityAffiliationsType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CharityIDType | A unique identification number assigned by eBay to registered nonprofit charity organizations.
     * Required input when listing Giving Works items.
     */
    public $CharityID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param CharityIDType $val
     * @throws Exception
     */
    public function setCharityID($val)
    {
        $this->CharityID = (CharityIDType)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (<anyXML>)$val;
    }
}
