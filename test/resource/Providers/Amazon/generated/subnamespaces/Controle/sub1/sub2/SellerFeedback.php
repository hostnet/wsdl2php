<?php

namespace Controle\sub1\sub2;

class SellerFeedback
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\FeedbackArray
	 */
	public $Feedback;
	// @codingStandardsIgnoreEnd

	/**
	 * @param FeedbackArray $val
	 * @throws \Exception
	 */
	public function setFeedback($val)
	{
        $this->Feedback = $val;
	}
}
