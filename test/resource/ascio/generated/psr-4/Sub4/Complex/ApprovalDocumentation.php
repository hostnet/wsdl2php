<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class ApprovalDocumentation
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ApprovalDocumentationType
     */
    public $type;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\string
     */
    public $objectnames;
    /**
     * @var string
     */
    public $orderid;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Attachment
     */
    public $attachments;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Extensions
     */
    public $extensions;
    /**
     * @param ApprovalDocumentationType $val
     * @throws Exception
     */
    public function setType($val)
    {
        $this->type = (int)$val;
    }

    /**
     * @param ArrayOfstring $val
     * @throws Exception
     */
    public function setObjectNames($val)
    {
        $this->objectnames = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setOrderId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for OrderId');
        }
        $this->orderid = (int)$val;
    }

    /**
     * @param ArrayOfAttachment $val
     * @throws Exception
     */
    public function setAttachments($val)
    {
        $this->attachments = (int)$val;
    }

    /**
     * @param Extensions $val
     * @throws Exception
     */
    public function setExtensions($val)
    {
        $this->extensions = (int)$val;
    }
}
