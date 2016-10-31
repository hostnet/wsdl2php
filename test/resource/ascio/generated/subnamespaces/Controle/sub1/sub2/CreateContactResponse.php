<?php

namespace Controle\sub1\sub2;

class CreateContactResponse
{
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $createcontactresult;
	/**
	 * @var \Controle\sub1\sub2\Contact
	 */
	public $contact;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateContactResult($val)
	{
        $this->createcontactresult = (int)$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setContact($val)
	{
        $this->contact = (int)$val;
	}
}
