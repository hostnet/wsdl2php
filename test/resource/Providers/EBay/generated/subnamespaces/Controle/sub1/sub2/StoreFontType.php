<?php

namespace Controle\sub1\sub2;

/**
 * StoreFontType
 * Store font set.
 */
class StoreFontType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\StoreFontFaceCodeType | Font for the Store name.
	 */
	public $NameFace;
	/**
	 * @var \Controle\sub1\sub2\StoreFontSizeCodeType | Font size for the Store name.
	 */
	public $NameSize;
	/**
	 * @var string | Font color for the Store name. Specified in 6-digit Hex format. For example: F6F6C9
	 */
	public $NameColor;
	/**
	 * @var \Controle\sub1\sub2\StoreFontFaceCodeType | Font for the Store section title.
	 */
	public $TitleFace;
	/**
	 * @var \Controle\sub1\sub2\StoreFontSizeCodeType | Font size for the Store section title.
	 */
	public $TitleSize;
	/**
	 * @var string | Font color for the Store section title. Specified in 6-digit Hex format. For example: F6F6C9
	 */
	public $TitleColor;
	/**
	 * @var \Controle\sub1\sub2\StoreFontFaceCodeType | Font for the Store description.
	 */
	public $DescFace;
	/**
	 * @var \Controle\sub1\sub2\StoreFontSizeCodeType | Font size for the Store description.
	 */
	public $DescSize;
	/**
	 * @var string | Font color for the Store description. Specified in 6-digit Hex format. For example: F6F6C9
	 */
	public $DescColor;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param StoreFontFaceCodeType $val
	 * @throws \Exception
	 */
	public function setNameFace($val)
	{
        $this->NameFace = $val;
	}

	/**
	 * @param StoreFontSizeCodeType $val
	 * @throws \Exception
	 */
	public function setNameSize($val)
	{
        $this->NameSize = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setNameColor($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for NameColor');
        }
        $this->NameColor = $val;
	}

	/**
	 * @param StoreFontFaceCodeType $val
	 * @throws \Exception
	 */
	public function setTitleFace($val)
	{
        $this->TitleFace = $val;
	}

	/**
	 * @param StoreFontSizeCodeType $val
	 * @throws \Exception
	 */
	public function setTitleSize($val)
	{
        $this->TitleSize = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTitleColor($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for TitleColor');
        }
        $this->TitleColor = $val;
	}

	/**
	 * @param StoreFontFaceCodeType $val
	 * @throws \Exception
	 */
	public function setDescFace($val)
	{
        $this->DescFace = $val;
	}

	/**
	 * @param StoreFontSizeCodeType $val
	 * @throws \Exception
	 */
	public function setDescSize($val)
	{
        $this->DescSize = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDescColor($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for DescColor');
        }
        $this->DescColor = $val;
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
