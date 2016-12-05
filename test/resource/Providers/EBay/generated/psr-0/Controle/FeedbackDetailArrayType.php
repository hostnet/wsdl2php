<?php

namespace Controle;

/**
 * FeedbackDetailArrayType
 * Contains multiple individual feedback detail entries.
 */
class FeedbackDetailArrayType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\FeedbackDetailType | Contains a single feedback detail entry. Output only.
	 */
	public $FeedbackDetail;
	// @codingStandardsIgnoreEnd

	/**
	 * @param FeedbackDetailType $val
	 * @throws Exception
	 */
	public function setFeedbackDetail($val)
	{
        $this->FeedbackDetail = (FeedbackDetailType)$val;
	}
}
