<?php

namespace Controle\sub1\sub2;

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
        $this->PageIndex = (int)$val;
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
        $this->PageSize = (int)$val;
	}
}
