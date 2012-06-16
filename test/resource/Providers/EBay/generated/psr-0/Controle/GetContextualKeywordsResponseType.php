<?php

namespace Controle;
/**
 * GetContextualKeywordsResponseType
 * Response to a GetContextualKeywords request.
 */
class GetContextualKeywordsResponseType extends \Controle\AbstractResponseType {
	/**
	 * @var \Controle\ContextSearchAssetType | An array of either keyword/category pairs or categories, with ranking and score.
	 */
	public $ContextSearchAsset;
}

