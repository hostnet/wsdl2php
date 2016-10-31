<?php

namespace Controle;

class PagingInfo
{
	/**
	 * @var int
	 */
	public $pageindex;
	/**
	 * @var int
	 */
	public $pagesize;
	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setPageIndex($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->pageindex = (int)$val;
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
        $this->pagesize = (int)$val;
	}
}
