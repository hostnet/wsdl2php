<?php

namespace Controle\sub1\sub2;

/**
 * ProStoresDetailsType
 * Details about the store.
 */
class ProStoresDetailsType
{
	/**
	 * @var string | The username associated with the store.  Returned only if the parent container is returned.
	 */
	public $sellerthirdpartyusername;
	/**
	 * @var string | The name of the seller's eBay Store.
	 */
	public $storename;
	/**
	 * @var \Controle\sub1\sub2\EnableCodeType | Indicates the user's registration/user status. To be eligible to list on Express, a seller's
	 * status must be Confirmed. See "eBay Express" in the eBay Web Services guide.
	 */
	public $status;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSellerThirdPartyUsername($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SellerThirdPartyUsername');
        }
        $this->sellerthirdpartyusername = (int)$val;
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
        $this->storename = (int)$val;
	}

	/**
	 * @param EnableCodeType $val
	 * @throws Exception
	 */
	public function setStatus($val)
	{
        $this->status = (int)$val;
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
