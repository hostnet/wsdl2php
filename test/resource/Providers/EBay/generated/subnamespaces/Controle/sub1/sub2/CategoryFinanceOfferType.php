<?php

namespace Controle\sub1\sub2;

/**
 * CategoryFinanceOfferType
 * A financing offer valid within a particular category.
 */
class CategoryFinanceOfferType
{
	/**
	 * @var string | Specifies a promotional offer that allow the buyer to purchase items on credit.
	 */
	public $financeofferid;
	/**
	 * @var string | ID of the category in which the Want It Now post is listed.
	 */
	public $categoryid;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setFinanceOfferID($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for FinanceOfferID');
        }
        $this->financeofferid = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCategoryID($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CategoryID');
        }
        $this->categoryid = (int)$val;
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
