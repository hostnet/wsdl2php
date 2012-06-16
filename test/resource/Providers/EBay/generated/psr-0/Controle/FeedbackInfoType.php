<?php

namespace Controle;
/**
 * FeedbackInfoType
 * Information used to add a feedback note for a user.
 */
class FeedbackInfoType {
	/**
	 * @var string | Textual comment that explains, clarifies, or justifies the feedback rating specified in
	 * CommentType. Still displayed if feedback is withdrawn.
	 */
	public $CommentText;
	/**
	 * @var \Controle\CommentTypeCodeType | Rating of the feedback being left (e.g., Positive).
	 */
	public $CommentType;
	/**
	 * @var \Controle\UserIDType | Recipient user for whom the feedback is being left.
	 */
	public $TargetUser;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCommentText($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for CommentText');
		$this->CommentText = (int)$val;
	}

	/**
	 * @param CommentTypeCodeType $val
	 * @throws Exception
	 */
	public function setCommentType($val) {
		
		$this->CommentType = (int)$val;
	}

	/**
	 * @param UserIDType $val
	 * @throws Exception
	 */
	public function setTargetUser($val) {
		
		$this->TargetUser = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val) {
		
		$this->any = (int)$val;
	}

}

