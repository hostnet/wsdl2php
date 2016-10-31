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
    /**
     * @param ContextSearchAssetType $val
     * @throws Exception
     */
    public function setContextSearchAsset($val) {
        
        $this->ContextSearchAsset = (int)$val;
    }

}

