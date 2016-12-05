<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class StoreCustomPageType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | Name of the eBay Store. The name is shown at the top of the Store page.
     */
    public $Name;
    /**
     * @var int | Unique identifier for the Store custom page. When you are using   SetStoreCustomPage,
     * if you specify a valid PageID, the custom page  is updated. If you do not specify a
     * PageID, the custom page is  added.
     */
    public $PageID;
    /**
     * @var string | The URL path of the Store (58 characters maximum). Only if you are using Chinese characters
     * in the Name property do you need to use this field, such as if you are opening a Store
     * on the Taiwan site. The reason for this is that the URL path is normally derived from
     * the Store name, but it cannot be derived from the name of the Store if it contains Chinese
     * characters because URLs cannot contain Chinese characters.
     */
    public $URLPath;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\anyURI | A commonly used eBay URL. Applications use some of these URLs (such as the View Item
     * URL) to launch eBay Web site pages in a browser.<br><br> Logo URLs are required to be
     * used in certain types of applications. See your API license agreement. Also see this
     * page for logo usage rules:<br> http://developer.ebay.com/join/licenses/apilogousage
     */
    public $URL;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\StoreCustomPageStatusCodeType | Indicates the user's registration/user status. To be eligible to list on Express, a
     * seller's status must be Confirmed. See "eBay Express" in the eBay Web Services guide.
     */
    public $Status;
    /**
     * @var string | The HTML content of the custom page. This field has a maximum size  of 96 kilobytes.
     * If PreviewEnabled is true, then this value is required.   Otherwise, it is optional.
     */
    public $Content;
    /**
     * @var boolean | Specifies whether the left navigation bar is visible on the page. LeftNav   is included
     * in the GetStoreCustomPage response when PageID is specified   in the request.
     */
    public $LeftNav;
    /**
     * @var boolean | If true, then the other inputs are ignored, and the content of the  page as it will
     * be displayed within the Store is returned. If  false, then the page is either modified
     * or added, and the content  of the page is not returned.
     */
    public $PreviewEnabled;
    /**
     * @var int | Order in which the page is displayed in the list of custom pages.
     */
    public $Order;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Name');
        }
        $this->Name = ()$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setPageID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->PageID = ()$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setURLPath($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for URLPath');
        }
        $this->URLPath = ()$val;
    }

    /**
     * @param anyURI $val
     * @throws Exception
     */
    public function setURL($val)
    {
        $this->URL = ()$val;
    }

    /**
     * @param StoreCustomPageStatusCodeType $val
     * @throws Exception
     */
    public function setStatus($val)
    {
        $this->Status = ()$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setContent($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Content');
        }
        $this->Content = ()$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setLeftNav($val)
    {
        $this->LeftNav = ()$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setPreviewEnabled($val)
    {
        $this->PreviewEnabled = ()$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setOrder($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Order = ()$val;
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
