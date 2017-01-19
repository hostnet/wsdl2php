<?php

namespace Controle\sub1\sub2;

/**
 * NameValueListArrayType
 * A list of one or more valid names and corresponding values.
 */
class NameValueListArrayType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\NameValueListType | A name and corresponding value (a name/value pair).<br> <br> In the GetSearchResults response,
	 * this is only returned for applicable items when the value of IncludeCondition was true
	 * in the GetSearchResults request, or when SearchRequest was used to perform a "Product Finder"
	 * search.<br> <br> In the GetSearchResultsExpress response, this is only returned when ProductDetails
	 * is set to Fine.
	 */
	public $NameValueList;
	// @codingStandardsIgnoreEnd

	/**
	 * @param NameValueListType $val
	 * @throws \Exception
	 */
	public function setNameValueList($val)
	{
        $this->NameValueList = $val;
	}
}
