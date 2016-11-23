<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * PaginatedItemArrayType
 * Contains a paginated list of items.
 */
class PaginatedItemArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemArrayType | Contains a list of Item types.
     */
    public $ItemArray;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaginationResultType | Provides information about the list of transactions, including number of pages and number
     * of entries.
     */
    public $PaginationResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param ItemArrayType $val
     * @throws Exception
     */
    public function setItemArray($val)
    {
        $this->ItemArray = (int)$val;
    }

    /**
     * @param PaginationResultType $val
     * @throws Exception
     */
    public function setPaginationResult($val)
    {
        $this->PaginationResult = (int)$val;
    }
}
