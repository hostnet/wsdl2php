<?php

namespace Controle;
class SellerFeedback {
	/**
	 * @var \Controle\FeedbackArray
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

