<?php

namespace Controle\sub1\sub2;

/**
 * PictureManagerPictureDisplayType
 * Defines various styles of picture display for images in Picture Manager albums.
 */
class PictureManagerPictureDisplayType
{
	/**
	 * @var \Controle\sub1\sub2\PictureManagerPictureDisplayTypeCodeType | Display type for the custom listing header.
	 */
	public $displaytype;
	/**
	 * @var \Controle\sub1\sub2\anyURI | A commonly used eBay URL. Applications use some of these URLs (such as the View Item URL) to
	 * launch eBay Web site pages in a browser.<br><br> Logo URLs are required to be used in certain
	 * types of applications. See your API license agreement. Also see this page for logo usage
	 * rules:<br> http://developer.ebay.com/join/licenses/apilogousage
	 */
	public $url;
	/**
	 * @var int | The total file size of the picture, in bytes.
	 */
	public $size;
	/**
	 * @var int | The height of a specific image, or the maximum allowed height, in pixels. Varies for different
	 * calls.
	 */
	public $height;
	/**
	 * @var int | The width of a specific image, or the maximum allowed width, in pixels. Varies for different
	 * calls.
	 */
	public $width;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param PictureManagerPictureDisplayTypeCodeType $val
	 * @throws Exception
	 */
	public function setDisplayType($val)
	{
        $this->displaytype = (int)$val;
	}

	/**
	 * @param anyURI $val
	 * @throws Exception
	 */
	public function setURL($val)
	{
        $this->url = (int)$val;
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
        $this->size = (int)$val;
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
        $this->height = (int)$val;
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
        $this->width = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (int)$val;
	}
}
