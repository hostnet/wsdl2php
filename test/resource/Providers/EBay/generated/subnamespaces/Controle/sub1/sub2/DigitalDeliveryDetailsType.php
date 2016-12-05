<?php

namespace Controle\sub1\sub2;

class DigitalDeliveryDetailsType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string | File type, operating system specifications, or other requirements for using the digital
	 * item. In this section, specify the following information about your digital item, if applicable:<br> -
	 * Type of file (file format). Examples include MP3, MOV, etc.<br> - Any computer hardware
	 * or software requirements. For example, is your file compatible with both PCs and Macintosh
	 * computers? Will it work with all operating systems (Windows XP, Windows 2000, Mac OS X,
	 * etc.)? Does the buyer need a specific software program, such as Microsoft Word, to use
	 * the item?<br> - Any other requirements. For example, does the buyer need to provide an
	 * email address where you will send the item?<br> For example: "Adobe PDF (Portable Document
	 * Format) file; buyer will need Adobe Acrobat Reader 5.0 or higher and 5MB of available hard-disk
	 * space." Be as specific as possible so that buyers know exactly what they need to access
	 * and use the item successfully. This information will appear in your listing so that buyers
	 * can make an informed purchase decision.
	 */
	public $Requirements;
	/**
	 * @var \Controle\sub1\sub2\DigitalDeliveryMethodCodeType | The digital download method.
	 */
	public $Method;
	/**
	 * @var \Controle\sub1\sub2\anyURI | A commonly used eBay URL. Applications use some of these URLs (such as the View Item URL) to
	 * launch eBay Web site pages in a browser.<br><br> Logo URLs are required to be used in certain
	 * types of applications. See your API license agreement. Also see this page for logo usage
	 * rules:<br> http://developer.ebay.com/join/licenses/apilogousage
	 */
	public $URL;
	/**
	 * @var string | Text instructions for accessing the digital item. For example, if no delivery URL is provided,
	 * the seller may ask the buyer to specify an email address when they pay for the item so
	 * that the seller can send the file to the buyer. If a Web address is specified in URL, the
	 * seller may provide instructions on using the Web address. The text will be displayed as
	 * is (so do not pass in HTML or Javascript). The information will be displayed to the buyer
	 * only after payment has been confirmed. Required if Method value is AlternateDeliveryInstructions. Optional
	 * if Method value is DownloadURL and a DownloadURL value is specified. Ignored if Method
	 * value is None.
	 */
	public $Instructions;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setRequirements($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Requirements');
        }
        $this->Requirements = (string)$val;
	}

	/**
	 * @param DigitalDeliveryMethodCodeType $val
	 * @throws Exception
	 */
	public function setMethod($val)
	{
        $this->Method = (DigitalDeliveryMethodCodeType)$val;
	}

	/**
	 * @param anyURI $val
	 * @throws Exception
	 */
	public function setURL($val)
	{
        $this->URL = (anyURI)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setInstructions($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Instructions');
        }
        $this->Instructions = (string)$val;
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
