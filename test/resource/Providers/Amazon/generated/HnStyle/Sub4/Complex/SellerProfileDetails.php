<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SellerProfileDetails
{
    /**
     * @var string
     */
    public $sellernickname;
    /**
     * @var string
     */
    public $overallfeedbackrating;
    /**
     * @var string
     */
    public $numberoffeedback;
    /**
     * @var string
     */
    public $numberofcanceledbids;
    /**
     * @var string
     */
    public $numberofcanceledauctions;
    /**
     * @var string
     */
    public $storeid;
    /**
     * @var string
     */
    public $storename;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SellerFeedback
     */
    public $sellerfeedback;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setSellerNickname($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SellerNickname');
        }
        $this->sellernickname = (int)$val;
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
        $this->overallfeedbackrating = (int)$val;
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
        $this->numberoffeedback = (int)$val;
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
        $this->numberofcanceledbids = (int)$val;
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
        $this->numberofcanceledauctions = (int)$val;
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
        $this->storeid = (int)$val;
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
        $this->storename = (int)$val;
    }

    /**
     * @param SellerFeedback $val
     * @throws Exception
     */
    public function setSellerFeedback($val)
    {
        $this->sellerfeedback = (int)$val;
    }
}
