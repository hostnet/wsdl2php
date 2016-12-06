<?php

namespace Controle;

/**
 * SellingManagerProductDetailsType
 * Returned if the user is a Selling Manager Pro user.
 */
class SellingManagerProductDetailsType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string | The exact product name of an item.
	 */
	public $ProductName;
	/**
	 * @var int | The numeric part number of an item.
	 */
	public $PartNumber;
	/**
	 * @var string | The alphanumeric part number of an item.
	 */
	public $ProductPartNumber;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setProductName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ProductName');
        }
        $this->ProductName = $val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setPartNumber($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->PartNumber = $val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setProductPartNumber($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ProductPartNumber');
        }
        $this->ProductPartNumber = $val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = $val;
	}
}
