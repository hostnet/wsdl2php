<?php

namespace Controle;
/**
 * PictureManagerPictureDisplayType
 * Defines various styles of picture display for images in Picture Manager albums.
 */
class PictureManagerPictureDisplayType {
    /**
     * @var \Controle\PictureManagerPictureDisplayTypeCodeType | Display type for the custom listing header.
     */
    public $DisplayType;
    /**
     * @var \Controle\anyURI | A commonly used eBay URL. Applications use some of these URLs (such as the View Item
     * URL) to launch eBay Web site pages in a browser.<br><br> Logo URLs are required to be
     * used in certain types of applications. See your API license agreement. Also see this
     * page for logo usage rules:<br> http://developer.ebay.com/join/licenses/apilogousage
     */
    public $URL;
    /**
     * @var int | The total file size of the picture, in bytes.
     */
    public $Size;
    /**
     * @var int | The height of a specific image, or the maximum allowed height, in pixels. Varies for
     * different calls.
     */
    public $Height;
    /**
     * @var int | The width of a specific image, or the maximum allowed width, in pixels. Varies for different
     * calls.
     */
    public $Width;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}

