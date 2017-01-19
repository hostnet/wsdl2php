<?php

namespace Controle;

/**
 * GetProductFinderResponseType
 * For a category that supports product finders, GetProductFinder returns an XML string
 *   that decribes the attributes a seller can use to form a query when searching for
 * Pre-filled Item Information, or attributes that can be used to search for listed items.
 *      Specifically, it retrieves data that you use to construct valid "product finder" queries
 *      (queries against multiple attributes).      Use the results in combination with GetProductFinderXSL
 * to render the Product Finder      in a graphical user interface.      See the Developer's
 * Guide for an overview of Pre-filled Item Information and details about      searching for
 * catalog products and for information about searching for listed items.
 */
class GetProductFinderResponseType extends
 \Controle\AbstractResponseType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string | Current version of the product search page data for the site. This value changes each time
	 * changes are made to the search page data. The current version value is not necessarily
	 * greater than the previous value. Therefore, when comparing versions, only compare whether
	 * the value has changed.
	 */
	public $AttributeSystemVersion;
	/**
	 * @var string | A string containing a list of search attributes that can be used in a "Product Finder"
	 * style query, along with related meta-data. The meta-data specifies possible values of each
	 * attribute, the logic for presenting attributes to a user, and rules for validating the user's
	 * selections. For backward compatibility, this data is in the same XML format that was used
	 * in the Legacy XML API so that you can apply the same Product Finder XSL stylesheet to it.
	 * That is, individual elements are not described using the new eBay XML schema format. For
	 * information about each element in the ProductFinderData string, see the product finder
	 * model documentation in the eBay Web Services guide (see links below).<br> <br> Because
	 * this is returned as a string, the XML markup is escaped with character entity references
	 * (e.g., &amp;lt;eBay&amp;gt;&amp;lt;ProductFinders&amp;gt;...). See the appendices in the
	 * eBay Web Services guide for general information about string data types.
	 */
	public $ProductFinderData;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setAttributeSystemVersion($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for AttributeSystemVersion');
        }
        $this->AttributeSystemVersion = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setProductFinderData($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for ProductFinderData');
        }
        $this->ProductFinderData = $val;
	}
}
