<?php

namespace Controle;

/**
 * StoreCustomListingHeaderLinkType
 * Custom listing header link.
 */
class StoreCustomListingHeaderLinkType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int | Link ID for the listing header link. The ID is used when the link  is a custom category
	 * or for a custom page, and it is not needed  when the LinkType property is "AboutMe" or
	 * "None".
	 */
	public $LinkID;
	/**
	 * @var int | Order in which the page is displayed in the list of custom pages.
	 */
	public $Order;
	/**
	 * @var \Controle\StoreCustomListingHeaderLinkCodeType | Type of link to include in the custom listing header.
	 */
	public $LinkType;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setLinkID($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->LinkID = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setOrder($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Order = $val;
	}

	/**
	 * @param StoreCustomListingHeaderLinkCodeType $val
	 * @throws \Exception
	 */
	public function setLinkType($val)
	{
        $this->LinkType = $val;
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
