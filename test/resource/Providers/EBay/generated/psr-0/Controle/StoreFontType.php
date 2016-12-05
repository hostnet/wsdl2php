<?php

namespace Controle;

/**
 * StoreFontType
 * Store font set.
 */
class StoreFontType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\StoreFontFaceCodeType | Font for the Store name.
	 */
	public $NameFace;
	/**
	 * @var \Controle\StoreFontSizeCodeType | Font size for the Store name.
	 */
	public $NameSize;
	/**
	 * @var string | Font color for the Store name. Specified in 6-digit Hex format. For example: F6F6C9
	 */
	public $NameColor;
	/**
	 * @var \Controle\StoreFontFaceCodeType | Font for the Store section title.
	 */
	public $TitleFace;
	/**
	 * @var \Controle\StoreFontSizeCodeType | Font size for the Store section title.
	 */
	public $TitleSize;
	/**
	 * @var string | Font color for the Store section title. Specified in 6-digit Hex format. For example: F6F6C9
	 */
	public $TitleColor;
	/**
	 * @var \Controle\StoreFontFaceCodeType | Font for the Store description.
	 */
	public $DescFace;
	/**
	 * @var \Controle\StoreFontSizeCodeType | Font size for the Store description.
	 */
	public $DescSize;
	/**
	 * @var string | Font color for the Store description. Specified in 6-digit Hex format. For example: F6F6C9
	 */
	public $DescColor;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param StoreFontFaceCodeType $val
	 * @throws Exception
	 */
	public function setNameFace($val)
	{
        $this->NameFace = (StoreFontFaceCodeType)$val;
	}

	/**
	 * @param StoreFontSizeCodeType $val
	 * @throws Exception
	 */
	public function setNameSize($val)
	{
        $this->NameSize = (StoreFontSizeCodeType)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setNameColor($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for NameColor');
        }
        $this->NameColor = (string)$val;
	}

	/**
	 * @param StoreFontFaceCodeType $val
	 * @throws Exception
	 */
	public function setTitleFace($val)
	{
        $this->TitleFace = (StoreFontFaceCodeType)$val;
	}

	/**
	 * @param StoreFontSizeCodeType $val
	 * @throws Exception
	 */
	public function setTitleSize($val)
	{
        $this->TitleSize = (StoreFontSizeCodeType)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setTitleColor($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for TitleColor');
        }
        $this->TitleColor = (string)$val;
	}

	/**
	 * @param StoreFontFaceCodeType $val
	 * @throws Exception
	 */
	public function setDescFace($val)
	{
        $this->DescFace = (StoreFontFaceCodeType)$val;
	}

	/**
	 * @param StoreFontSizeCodeType $val
	 * @throws Exception
	 */
	public function setDescSize($val)
	{
        $this->DescSize = (StoreFontSizeCodeType)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDescColor($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DescColor');
        }
        $this->DescColor = (string)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (<anyXML>)$val;
	}
}
