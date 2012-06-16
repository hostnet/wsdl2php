<?php

namespace Controle\sub1\sub2;
/**
 * GetProductFamilyMembersResponseType
 * GetProductFamilyMembers performs a product search and returns results comprising all the
 * children in the product family identified by a product ID that was specified in the request.
 * Use this call when more matches are found than the max amount specified per family in a
 * call to GetProductSearchResults. This call supports batch requests. This means you can retrieve
 * products in multiple families by using a single request. The results are compatible with
 * the results from GetProductSearchResults, so similar application logic can be used to handle
 * both requests and responses.
 */
class GetProductFamilyMembersResponseType extends \Controle\sub1\sub2\AbstractResponseType {
	/**
	 * @var \Controle\sub1\sub2\DataElementSetType | Container for one or more DataElement fields containing supplemental helpful data.
	 *              A DataElement field is an HTML snippet that specifies hints for the user,
	 * help links, help graphics, and other supplemental information that varies per characteristic
	 * set. Usage of this information is optional and may require you to inspect the information
	 *                  to determine how it can be applied in an application.
	 *  Also returned with warnings when no matches are found.
	 */
	public $DataElementSets;
	/**
	 * @var \Controle\sub1\sub2\ProductSearchResultType | Contains the attributes and product details that match the attributes or query keywords
	 *                  passed in the request. Always returned when product search results are
	 * found.
	 */
	public $ProductSearchResult;
}

