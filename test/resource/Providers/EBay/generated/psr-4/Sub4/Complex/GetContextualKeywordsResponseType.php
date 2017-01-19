<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetContextualKeywordsResponseType
 * Response to a GetContextualKeywords request.
 */
class GetContextualKeywordsResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ContextSearchAssetType | An array of either keyword/category pairs or categories, with ranking and score.
     */
    public $ContextSearchAsset;
    // @codingStandardsIgnoreEnd

    /**
     * @param ContextSearchAssetType $val
     * @throws \Exception
     */
    public function setContextSearchAsset($val)
    {
        $this->ContextSearchAsset = $val;
    }
}
