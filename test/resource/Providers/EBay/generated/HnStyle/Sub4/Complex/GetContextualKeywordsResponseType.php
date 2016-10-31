<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetContextualKeywordsResponseType
 * Response to a GetContextualKeywords request.
 */
class GetContextualKeywordsResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ContextSearchAssetType | An array of either keyword/category pairs or categories, with ranking and score.
     */
    public $contextsearchasset;
    /**
     * @param ContextSearchAssetType $val
     * @throws Exception
     */
    public function setContextSearchAsset($val)
    {
        $this->contextsearchasset = (int)$val;
    }
}
