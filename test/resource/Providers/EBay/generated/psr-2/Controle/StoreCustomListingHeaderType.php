<?php

namespace Controle;

/**
 * StoreCustomListingHeaderType
 * Configuration of a Store custom listing header.
 */
class StoreCustomListingHeaderType
{
    /**
     * @var \Controle\StoreCustomListingHeaderDisplayCodeType | Display type for the custom listing header.
     */
    public $displaytype;
    /**
     * @var boolean | Store logo.
     */
    public $logo;
    /**
     * @var boolean | Specifies whether the custom header has a search box.
     */
    public $searchbox;
    /**
     * @var \Controle\StoreCustomListingHeaderLinkType | Link to include in the custom header.
     */
    public $linktoinclude;
    /**
     * @var boolean | Specifies whether the custom header has a link to Add to Favorite Stores.
     */
    public $addtofavoritestores;
    /**
     * @var boolean | Specifies whether the custom header has a link to Sign up for Store Newsletter.
     */
    public $signupforstorenewsletter;
    /**
     * @var boolean | Specifies whether the bread crumb needs to be displayed above the listing header.
     */
    public $breadcrumb;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @param StoreCustomListingHeaderDisplayCodeType $val
     * @throws Exception
     */
    public function setDisplayType($val)
    {
        $this->displaytype = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setLogo($val)
    {
        $this->logo = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setSearchBox($val)
    {
        $this->searchbox = (int)$val;
    }

    /**
     * @param StoreCustomListingHeaderLinkType $val
     * @throws Exception
     */
    public function setLinkToInclude($val)
    {
        $this->linktoinclude = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setAddToFavoriteStores($val)
    {
        $this->addtofavoritestores = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setSignUpForStoreNewsletter($val)
    {
        $this->signupforstorenewsletter = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setBreadCrumb($val)
    {
        $this->breadcrumb = (int)$val;
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
