<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetContextualKeywordsRequestType
 * Retrieves top-ranked contextual eBay keywords and categories for a specified web page. Results
 * are ranked according to score. This enables developers to create applications that are different
 * from traditional contextual ad serving. For instance, instead of building a standard ad
 * banner or skyscraper ad like those from eBay AdContext, a developer could create an application
 * that does inline hyperlinking of keywords on any page or create widgets for blog platforms. Not
 * available for CN, TW, SG and HK sites.
 */
class GetContextualKeywordsRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\anyURI | A commonly used eBay URL. Applications use some of these URLs (such as the View Item
     * URL) to launch eBay Web site pages in a browser.<br><br> Logo URLs are required to be
     * used in certain types of applications. See your API license agreement. Also see this
     * page for logo usage rules:<br> http://developer.ebay.com/join/licenses/apilogousage
     */
    public $URL;
    /**
     * @var string | Web page encoding by which the URL is to be handled, such as ISO-8859-1.
     */
    public $Encoding;
    /**
     * @var string | ID of the category in which the Want It Now post is listed.
     */
    public $CategoryID;
    // @codingStandardsIgnoreEnd

    /**
     * @param anyURI $val
     * @throws \Exception
     */
    public function setURL($val)
    {
        $this->URL = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setEncoding($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Encoding');
        }
        $this->Encoding = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setCategoryID($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for CategoryID');
        }
        $this->CategoryID = $val;
    }
}
