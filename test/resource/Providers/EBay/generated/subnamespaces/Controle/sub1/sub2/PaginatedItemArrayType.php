<?php

namespace Controle\sub1\sub2;

/**
 * PaginatedItemArrayType
 * Contains a paginated list of items.
 */
class PaginatedItemArrayType
{
	/**
	 * @var \Controle\sub1\sub2\ItemArrayType | Contains a list of Item types.
	 */
	public $itemarray;
	/**
	 * @var \Controle\sub1\sub2\PaginationResultType | Provides information about the list of transactions, including number of pages and number
	 * of entries.
	 */
	public $paginationresult;
	/**
	 * @param ItemArrayType $val
	 * @throws Exception
	 */
	public function setItemArray($val)
	{
        $this->itemarray = (int)$val;
	}

	/**
	 * @param PaginationResultType $val
	 * @throws Exception
	 */
	public function setPaginationResult($val)
	{
        $this->paginationresult = (int)$val;
	}
}
