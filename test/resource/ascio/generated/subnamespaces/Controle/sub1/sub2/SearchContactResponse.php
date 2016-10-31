<?php

namespace Controle\sub1\sub2;

class SearchContactResponse
{
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $searchcontactresult;
	/**
	 * @var array \Controle\sub1\sub2\Contact
	 */
	public $contacts;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchContactResult($val)
	{
        $this->searchcontactresult = (int)$val;
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
