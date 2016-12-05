<?php

namespace Controle;

/**
 * GetProductSearchPageResponseType
 * For a category that is catalog-enabled, GetProductSearchPage retrieves the attributes
 *    a seller can use to form a query when searching for Pre-filled Item Information.
 *  See the Developer's Guide for an overview of Pre-filled Item Information and details about
 *      searching for catalog products.
 */
class GetProductSearchPageResponseType extends
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
	 * @var \Controle\ProductSearchPageType | A list of catalog search criteria and sort keys associated with a catalog-enabled category, plus
	 * supplemental information to help the seller understand how to make selections.
	 */
	public $ProductSearchPage;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setAttributeSystemVersion($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for AttributeSystemVersion');
        }
        $this->AttributeSystemVersion = (string)$val;
	}

	/**
	 * @param ProductSearchPageType $val
	 * @throws Exception
	 */
	public function setProductSearchPage($val)
	{
        $this->ProductSearchPage = (ProductSearchPageType)$val;
	}
}
