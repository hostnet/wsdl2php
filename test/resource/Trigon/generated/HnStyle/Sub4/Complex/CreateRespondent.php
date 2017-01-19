<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class CreateRespondent
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $itcModel;
    /**
     * @var string
     */
    public $passWord;
    /**
     * @var string
     */
    public $respondentId;
    /**
     * @var string
     */
    public $respondentData;
    /**
     * @var string
     */
    public $respondentDataEncoding;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setEmail($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for email');
        }
        $this->email = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setItcModel($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for itcModel');
        }
        $this->itcModel = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setPassWord($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for passWord');
        }
        $this->passWord = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setRespondentId($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for respondentId');
        }
        $this->respondentId = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setRespondentData($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for respondentData');
        }
        $this->respondentData = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setRespondentDataEncoding($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for respondentDataEncoding');
        }
        $this->respondentDataEncoding = $val;
    }
}
