<?php

namespace Controle\sub1\sub2;

class SearchContactResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $SearchContactResult;
	/**
	 * @var array \Controle\sub1\sub2\Contact
	 */
	public $contacts;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchContactResult($val)
	{
        $this->SearchContactResult = (int)$val;
	}

	/**
	 * @param ArrayOfContact $val
	 * @throws Exception
	 */
	public function setContacts($val)
	{
        $this->contacts = (int)$val;
	}
}
