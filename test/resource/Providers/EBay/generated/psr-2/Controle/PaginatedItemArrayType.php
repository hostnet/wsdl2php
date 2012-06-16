<?php

namespace Controle;
/**
 * PaginatedItemArrayType
 * Contains a paginated list of items.
 */
class PaginatedItemArrayType {
    /**
     * @var \Controle\ItemArrayType | Contains a list of Item types.
     */
    public $ItemArray;
    /**
     * @var \Controle\PaginationResultType | Provides information about the list of transactions, including number of pages and number
     * of entries.
     */
    public $PaginationResult;
}
