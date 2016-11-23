<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SellerProfileDetails
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $SellerNickname;
    /**
     * @var string
     */
    public $OverallFeedbackRating;
    /**
     * @var string
     */
    public $NumberOfFeedback;
    /**
     * @var string
     */
    public $NumberOfCanceledBids;
    /**
     * @var string
     */
    public $NumberOfCanceledAuctions;
    /**
     * @var string
     */
    public $StoreId;
    /**
     * @var string
     */
    public $StoreName;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SellerFeedback
     */
    public $SellerFeedback;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSellerNickname($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SellerNickname');
        }
        $this->SellerNickname = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setOverallFeedbackRating($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for OverallFeedbackRating');
        }
        $this->OverallFeedbackRating = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setNumberOfFeedback($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for NumberOfFeedback');
        }
        $this->NumberOfFeedback = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setNumberOfCanceledBids($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for NumberOfCanceledBids');
        }
        $this->NumberOfCanceledBids = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setNumberOfCanceledAuctions($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for NumberOfCanceledAuctions');
        }
        $this->NumberOfCanceledAuctions = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setStoreId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for StoreId');
        }
        $this->StoreId = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setStoreName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for StoreName');
        }
        $this->StoreName = (int)$val;
    }

    /**
     * @param SellerFeedback $val
     * @throws Exception
     */
    public function setSellerFeedback($val)
    {
        $this->SellerFeedback = (int)$val;
    }
}
