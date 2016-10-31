<?php

namespace Controle;

/**
 * MyeBaySelectionType
 * Specifies how the result list for My eBay features such as favorite searches, favorite sellers,
 * and second chance offers should be returned.
 */
class MyeBaySelectionType
{
    /**
     * @var boolean | Whether to include information about this type of reminder in the response. When true,
     * the container is returned with default input parameters.
     */
    public $include;
    /**
     * @var \Controle\SortOrderCodeType | Specifies the result sort order. Default is Ascending.
     */
    public $sort;
    /**
     * @var int | Specifies the maximum number of items in the returned list. If not specified, returns
     * all items in the list.
     */
    public $maxresults;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setInclude($val)
    {
        $this->include = (int)$val;
    }

    /**
     * @param SortOrderCodeType $val
     * @throws Exception
     */
    public function setSort($val)
    {
        $this->sort = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setMaxResults($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->maxresults = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }
}
