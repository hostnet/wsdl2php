<?php

namespace Controle;

class PagingInfo
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $PageIndex;
    /**
     * @var int
     */
    public $PageSize;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws Exception
     */
    public function setPageIndex($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->PageIndex = ()$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setPageSize($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->PageSize = ()$val;
    }
}
