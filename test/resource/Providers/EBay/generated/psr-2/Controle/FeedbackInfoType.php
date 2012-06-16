<?php

namespace Controle;
/**
 * FeedbackInfoType
 * Information used to add a feedback note for a user.
 */
class FeedbackInfoType {
    /**
     * @var string | Textual comment that explains, clarifies, or justifies the feedback rating specified
     * in CommentType. Still displayed if feedback is withdrawn.
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
}

