<?php

namespace Controle;

class CreateContactResponse
{
	/**
	 * @var \Controle\Response
	 */
	public $createcontactresult;
	/**
	 * @var \Controle\Contact
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
