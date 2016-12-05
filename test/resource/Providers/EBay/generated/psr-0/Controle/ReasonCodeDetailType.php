<?php

namespace Controle;

/**
 * ReasonCodeDetailType
 * A container for VeRO reason code details.
 */
class ReasonCodeDetailType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string | The short description of the infringement associated with the reason code ID.
	 */
	public $BriefText;
	/**
	 * @var string | The long description of the infringement associated with the reason code ID.
	 */
	public $DetailedText;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @var long
	 */
	public $codeID;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setBriefText($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for BriefText');
        }
        $this->BriefText = ()$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDetailedText($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DetailedText');
        }
        $this->DetailedText = ()$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = ()$val;
	}

	/**
	 * @param long $val
	 * @throws Exception
	 */
	public function setCodeID($val)
	{
        $this->codeID = ()$val;
	}
}
