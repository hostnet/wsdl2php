<?php

namespace Controle;

/**
 * StoreCustomListingHeaderLinkType
 * Custom listing header link.
 */
class StoreCustomListingHeaderLinkType
{
	/**
	 * @var int | Link ID for the listing header link. The ID is used when the link  is a custom category
	 * or for a custom page, and it is not needed  when the LinkType property is "AboutMe" or
	 * "None".
	 */
	public $linkid;
	/**
	 * @var int | Order in which the page is displayed in the list of custom pages.
	 */
	public $order;
	/**
	 * @var \Controle\StoreCustomListingHeaderLinkCodeType | Type of link to include in the custom listing header.
	 */
	public $linktype;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setLinkID($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->linkid = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setOrder($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->order = (int)$val;
	}

	/**
	 * @param StoreCustomListingHeaderLinkCodeType $val
	 * @throws Exception
	 */
	public function setLinkType($val)
	{
        $this->linktype = (int)$val;
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
