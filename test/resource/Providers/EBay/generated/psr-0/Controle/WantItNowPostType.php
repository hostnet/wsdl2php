<?php

namespace Controle;

/**
 * WantItNowPostType
 * Contains the data describing a single Want It Now post. Buyers create Want It Now posts
 * to communicate to sellers specific requirements for items they would like to buy.
 */
class WantItNowPostType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string | ID of the category in which the Want It Now post is listed.
	 */
	public $CategoryID;
	/**
	 * @var string | Description of a Want It Now post. Description will not be returned for GetWantItNowSearchResults.
	 */
	public $Description;
	/**
	 * @var \Controle\ItemIDType | ID that uniquely identifies a Want It Now post.
	 */
	public $PostID;
	/**
	 * @var \Controle\SiteCodeType | Site where the Want It Now post is listed.
	 */
	public $Site;
	/**
	 * @var dateTime | Date and time (in GMT) that a Want It Now post was added.
	 */
	public $StartTime;
	/**
	 * @var int | Number of responses for a Want It Now post. Sellers respond to a Want It Now post by submitting
	 * an item number, so each response corresponds to an item listing.
	 */
	public $ResponseCount;
	/**
	 * @var string | Title of a Want It Now post.
	 */
	public $Title;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCategoryID($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CategoryID');
        }
        $this->CategoryID = $val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDescription($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Description');
        }
        $this->Description = $val;
	}

	/**
	 * @param ItemIDType $val
	 * @throws Exception
	 */
	public function setPostID($val)
	{
        $this->PostID = $val;
	}

	/**
	 * @param SiteCodeType $val
	 * @throws Exception
	 */
	public function setSite($val)
	{
        $this->Site = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setStartTime($val)
	{
        $this->StartTime = $val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setResponseCount($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->ResponseCount = $val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setTitle($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Title');
        }
        $this->Title = $val;
	}
}
