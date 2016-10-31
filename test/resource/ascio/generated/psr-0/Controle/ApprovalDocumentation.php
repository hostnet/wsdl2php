<?php

namespace Controle;

class ApprovalDocumentation
{
	/**
	 * @var \Controle\ApprovalDocumentationType
	 */
	public $type;
	/**
	 * @var array \Controle\string
	 */
	public $objectnames;
	/**
	 * @var string
	 */
	public $orderid;
	/**
	 * @var array \Controle\Attachment
	 */
	public $attachments;
	/**
	 * @var \Controle\Extensions
	 */
	public $extensions;
	/**
	 * @param ApprovalDocumentationType $val
	 * @throws Exception
	 */
	public function setType($val)
	{
        $this->type = (int)$val;
	}

	/**
	 * @param ArrayOfstring $val
	 * @throws Exception
	 */
	public function setObjectNames($val)
	{
        $this->objectnames = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setOrderId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for OrderId');
        }
        $this->orderid = (int)$val;
	}

	/**
	 * @param ArrayOfAttachment $val
	 * @throws Exception
	 */
	public function setAttachments($val)
	{
        $this->attachments = (int)$val;
	}

	/**
	 * @param Extensions $val
	 * @throws Exception
	 */
	public function setExtensions($val)
	{
        $this->extensions = (int)$val;
	}
}
