<?php

namespace Controle\sub1\sub2;

/**
 * WantItNowPostType
 * Contains the data describing a single Want It Now post. Buyers create Want It Now posts
 * to communicate to sellers specific requirements for items they would like to buy.
 */
class WantItNowPostType
{
	/**
	 * @var string | ID of the category in which the Want It Now post is listed.
	 */
	public $categoryid;
	/**
	 * @var string | Description of a Want It Now post. Description will not be returned for GetWantItNowSearchResults.
	 */
	public $description;
	/**
	 * @var \Controle\sub1\sub2\ItemIDType | ID that uniquely identifies a Want It Now post.
	 */
	public $postid;
	/**
	 * @var \Controle\sub1\sub2\SiteCodeType | Site where the Want It Now post is listed.
	 */
	public $site;
	/**
	 * @var dateTime | Date and time (in GMT) that a Want It Now post was added.
	 */
	public $starttime;
	/**
	 * @var int | Number of responses for a Want It Now post. Sellers respond to a Want It Now post by submitting
	 * an item number, so each response corresponds to an item listing.
	 */
	public $responsecount;
	/**
	 * @var string | Title of a Want It Now post.
	 */
	public $title;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCategoryID($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CategoryID');
        }
        $this->categoryid = (int)$val;
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
        $this->description = (int)$val;
	}

	/**
	 * @param ItemIDType $val
	 * @throws Exception
	 */
	public function setPostID($val)
	{
        $this->postid = (int)$val;
	}

	/**
	 * @param SiteCodeType $val
	 * @throws Exception
	 */
	public function setSite($val)
	{
        $this->site = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setStartTime($val)
	{
        $this->starttime = (int)$val;
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
        $this->responsecount = (int)$val;
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
        $this->title = (int)$val;
	}
}
