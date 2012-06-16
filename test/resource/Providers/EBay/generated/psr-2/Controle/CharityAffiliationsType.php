<?php

namespace Controle;
/**
 * CharityAffiliationsType
 * Lists the nonprofit charity organization affiliations for a specified user.
 */
class CharityAffiliationsType {
    /**
     * @var \Controle\CharityIDType | A unique identification number assigned by eBay to registered nonprofit charity organizations.
     * Required input when listing Giving Works items.
     */
    public $CharityID;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}

