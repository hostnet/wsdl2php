<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * MyeBaySelectionType
 * Specifies how the result list for My eBay features such as favorite searches, favorite sellers,
 * and second chance offers should be returned.
 */
class MyeBaySelectionType
{
    // @codingStandardsIgnoreStart
    /**
     * @var boolean | Whether to include information about this type of reminder in the response. When true,
     * the container is returned with default input parameters.
     */
    public $Include;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SortOrderCodeType | Specifies the result sort order. Default is Ascending.
     */
    public $Sort;
    /**
     * @var int | Specifies the maximum number of items in the returned list. If not specified, returns
     * all items in the list.
     */
    public $MaxResults;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setInclude($val)
    {
        $this->Include = $val;
    }

    /**
     * @param SortOrderCodeType $val
     * @throws \Exception
     */
    public function setSort($val)
    {
        $this->Sort = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setMaxResults($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->MaxResults = $val;
    }

    /**
     * @param <anyXML> $val
     * @throws \Exception
     */
    public function setAny($val)
    {
        $this->any = $val;
    }
}
