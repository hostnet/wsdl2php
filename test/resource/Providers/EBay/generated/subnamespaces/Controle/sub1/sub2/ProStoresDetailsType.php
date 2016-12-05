<?php

namespace Controle\sub1\sub2;

/**
 * ProStoresDetailsType
 * Details about the store.
 */
class ProStoresDetailsType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string | The username associated with the store.  Returned only if the parent container is returned.
	 */
	public $SellerThirdPartyUsername;
	/**
	 * @var string | The name of the seller's eBay Store.
	 */
	public $StoreName;
	/**
	 * @var \Controle\sub1\sub2\EnableCodeType | Indicates the user's registration/user status. To be eligible to list on Express, a seller's
	 * status must be Confirmed. See "eBay Express" in the eBay Web Services guide.
	 */
	public $Status;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSellerThirdPartyUsername($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SellerThirdPartyUsername');
        }
        $this->SellerThirdPartyUsername = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setStoreName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for StoreName');
        }
        $this->StoreName = (string)$val;
	}

	/**
	 * @param EnableCodeType $val
	 * @throws Exception
	 */
	public function setStatus($val)
	{
        $this->Status = (EnableCodeType)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (<anyXML>)$val;
	}
}
