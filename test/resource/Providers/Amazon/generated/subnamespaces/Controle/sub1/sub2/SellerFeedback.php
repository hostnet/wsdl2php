<?php

namespace Controle\sub1\sub2;
class SellerFeedback {
	/**
	 * @var \Controle\sub1\sub2\FeedbackArray
	 */
	public $Feedback;
	/**
	 * @param FeedbackArray $val
	 * @throws Exception
	 */
	public function setFeedback($val) {
		
		$this->Feedback = (int)$val;
	}

}

