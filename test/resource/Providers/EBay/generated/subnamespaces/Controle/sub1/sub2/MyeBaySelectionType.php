<?php

namespace Controle\sub1\sub2;
/**
 * MyeBaySelectionType
 * Specifies how the result list for My eBay features such as favorite searches, favorite sellers,
 * and second chance offers should be returned.
 */
class MyeBaySelectionType {
	/**
	 * @var boolean | Whether to include information about this type of reminder in the response. When true,
	 * the container is returned with default input parameters.
	 */
	public $Include;
	/**
	 * @var \Controle\sub1\sub2\SortOrderCodeType | Specifies the result sort order. Default is Ascending.
	 */
	public $Sort;
	/**
	 * @var int | Specifies the maximum number of items in the returned list. If not specified, returns all
	 * items in the list.
	 */
	public $MaxResults;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

