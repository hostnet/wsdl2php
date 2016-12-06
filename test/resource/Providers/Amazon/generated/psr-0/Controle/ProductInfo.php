<?php

namespace Controle;

class ProductInfo
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $TotalResults;
	/**
	 * @var string
	 */
	public $TotalPages;
	/**
	 * @var string
	 */
	public $ListName;
	/**
	 * @var \Controle\DetailsArray
	 */
	public $Details;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setTotalResults($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for TotalResults');
        }
        $this->TotalResults = $val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setTotalPages($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for TotalPages');
        }
        $this->TotalPages = $val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setListName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ListName');
        }
        $this->ListName = $val;
	}

	/**
	 * @param DetailsArray $val
	 * @throws Exception
	 */
	public function setDetails($val)
	{
        $this->Details = $val;
	}
}
