<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * FeedbackInfoType
 * Information used to add a feedback note for a user.
 */
class FeedbackInfoType
{
    /**
     * @var string | Textual comment that explains, clarifies, or justifies the feedback rating specified
     * in CommentType. Still displayed if feedback is withdrawn.
     */
    public $commenttext;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CommentTypeCodeType | Rating of the feedback being left (e.g., Positive).
     */
    public $commenttype;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\UserIDType | Recipient user for whom the feedback is being left.
     */
    public $targetuser;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setCommentText($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CommentText');
        }
        $this->commenttext = (int)$val;
    }

    /**
     * @param CommentTypeCodeType $val
     * @throws Exception
     */
    public function setCommentType($val)
    {
        $this->commenttype = (int)$val;
    }

    /**
     * @param UserIDType $val
     * @throws Exception
     */
    public function setTargetUser($val)
    {
        $this->targetuser = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }
}
