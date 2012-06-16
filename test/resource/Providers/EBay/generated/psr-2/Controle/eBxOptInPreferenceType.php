<?php

namespace Controle;
/**
 * eBxOptInPreferenceType
 * Contains a seller's preferences for listing items on Ebay Express.
 */
class eBxOptInPreferenceType {
    /**
     * @var boolean | If true: The seller wants their eligible eBay listings to be included on eBay Express
     * (in addition to the main eBay site). If false: The seller does not want their listings
     * to be included on eBay Express. If omitted (in SetUserPreferences): The seller does
     * not want to change their existing preference. (Initially, eBay sets this preference
     * to true for every seller.)
     */
    public $eBxOptInPreference;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}

