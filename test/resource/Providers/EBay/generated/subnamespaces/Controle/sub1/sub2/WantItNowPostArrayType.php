<?php

namespace Controle\sub1\sub2;

/**
 * WantItNowPostArrayType
 * Container for a list of search result items. Can contain zero, one, or multiple WantItNowPostType
 * objects, each of which contains data for a single Want It Now post found by the search.
 */
class WantItNowPostArrayType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\WantItNowPostType | Contains data for a Want It Now post found by a search.
	 */
	public $WantItNowPost;
	// @codingStandardsIgnoreEnd

	/**
	 * @param WantItNowPostType $val
	 * @throws \Exception
	 */
	public function setWantItNowPost($val)
	{
        $this->WantItNowPost = $val;
	}
}
