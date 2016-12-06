<?php

namespace Controle\sub1\sub2;

/**
 * PictureManagerPictureDisplayType
 * Defines various styles of picture display for images in Picture Manager albums.
 */
class PictureManagerPictureDisplayType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\PictureManagerPictureDisplayTypeCodeType | Display type for the custom listing header.
	 */
	public $DisplayType;
	/**
	 * @var \Controle\sub1\sub2\anyURI | A commonly used eBay URL. Applications use some of these URLs (such as the View Item URL) to
	 * launch eBay Web site pages in a browser.<br><br> Logo URLs are required to be used in certain
	 * types of applications. See your API license agreement. Also see this page for logo usage
	 * rules:<br> http://developer.ebay.com/join/licenses/apilogousage
	 */
	public $URL;
	/**
	 * @var int | The total file size of the picture, in bytes.
	 */
	public $Size;
	/**
	 * @var int | The height of a specific image, or the maximum allowed height, in pixels. Varies for different
	 * calls.
	 */
	public $Height;
	/**
	 * @var int | The width of a specific image, or the maximum allowed width, in pixels. Varies for different
	 * calls.
	 */
	public $Width;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param PictureManagerPictureDisplayTypeCodeType $val
	 * @throws Exception
	 */
	public function setDisplayType($val)
	{
        $this->DisplayType = $val;
	}

	/**
	 * @param anyURI $val
	 * @throws Exception
	 */
	public function setURL($val)
	{
        $this->URL = $val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setSize($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Size = $val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setHeight($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Height = $val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setWidth($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Width = $val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = $val;
	}
}
