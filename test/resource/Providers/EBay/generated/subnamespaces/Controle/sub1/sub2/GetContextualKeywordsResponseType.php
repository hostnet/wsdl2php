<?php

namespace Controle\sub1\sub2;
/**
 * GetContextualKeywordsResponseType
 * Response to a GetContextualKeywords request.
 */
class GetContextualKeywordsResponseType extends \Controle\sub1\sub2\AbstractResponseType {
	/**
	 * @var \Controle\sub1\sub2\ContextSearchAssetType | An array of either keyword/category pairs or categories, with ranking and score.
	 */
	public $ContextSearchAsset;
}

