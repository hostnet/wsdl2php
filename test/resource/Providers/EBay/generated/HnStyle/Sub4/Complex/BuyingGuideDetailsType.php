<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * BuyingGuideDetailsType
 * Information about zero or more buying guides and the site's buying guide hub.          Buying
 * guides contain content about particular product areas, categories, or subjects
 * to help buyers decide which type of item to purchase based on their particular interests.
 *          Multiple buying guides can be returned. See the eBay Web Services Guide for additional
 * information.
 */
class BuyingGuideDetailsType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\BuyingGuideType | Information that identifies a buying guide. A buying guide contains content about particular
     *            product areas, categories, or subjects to help buyers decide which type of
     * item            to purchase based on their particular interests.            Buying guides
     * are useful to buyers who do not have a specific product in mind.            For example,
     * a digital camera buying guide could help a buyer determine what kind of            digital
     * camera is right for them.
     */
    public $BuyingGuide;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\anyURI | URL of the buying guide home page for the site being searched.            Your application
     * can present this URL as a link. Optionally,            you can use a value like "See
     * all buying guides" as the link's display name.
     */
    public $BuyingGuideHub;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param BuyingGuideType $val
     * @throws Exception
     */
    public function setBuyingGuide($val)
    {
        $this->BuyingGuide = ()$val;
    }

    /**
     * @param anyURI $val
     * @throws Exception
     */
    public function setBuyingGuideHub($val)
    {
        $this->BuyingGuideHub = ()$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = ()$val;
    }
}
