<?php

namespace Controle;

class ApprovalDocumentation
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\ApprovalDocumentationType
	 */
	public $Type;
	/**
	 * @var array \Controle\string
	 */
	public $ObjectNames;
	/**
	 * @var string
	 */
	public $OrderId;
	/**
	 * @var array \Controle\Attachment
	 */
	public $Attachments;
	/**
	 * @var \Controle\Extensions
	 */
	public $Extensions;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ApprovalDocumentationType $val
	 * @throws \Exception
	 */
	public function setType($val)
	{
        $this->Type = $val;
	}

	/**
	 * @param ArrayOfstring $val
	 * @throws \Exception
	 */
	public function setObjectNames($val)
	{
        $this->ObjectNames = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setOrderId($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for OrderId');
        }
        $this->OrderId = $val;
	}

	/**
	 * @param ArrayOfAttachment $val
	 * @throws \Exception
	 */
	public function setAttachments($val)
	{
        $this->Attachments = $val;
	}

	/**
	 * @param Extensions $val
	 * @throws \Exception
	 */
	public function setExtensions($val)
	{
        $this->Extensions = $val;
	}
}
