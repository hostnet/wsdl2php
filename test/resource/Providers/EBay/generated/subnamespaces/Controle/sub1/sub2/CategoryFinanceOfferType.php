<?php

namespace Controle\sub1\sub2;

/**
 * CategoryFinanceOfferType
 * A financing offer valid within a particular category.
 */
class CategoryFinanceOfferType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string | Specifies a promotional offer that allow the buyer to purchase items on credit.
	 */
	public $FinanceOfferID;
	/**
	 * @var string | ID of the category in which the Want It Now post is listed.
	 */
	public $CategoryID;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setFinanceOfferID($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for FinanceOfferID');
        }
        $this->FinanceOfferID = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setCategoryID($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for CategoryID');
        }
        $this->CategoryID = $val;
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
