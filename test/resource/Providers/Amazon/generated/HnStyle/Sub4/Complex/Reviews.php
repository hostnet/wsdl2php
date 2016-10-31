<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class Reviews
{
    /**
     * @var string
     */
    public $avgcustomerrating;
    /**
     * @var string
     */
    public $totalcustomerreviews;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CustomerReviewArray
     */
    public $customerreviews;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setAvgCustomerRating($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for AvgCustomerRating');
        }
        $this->avgcustomerrating = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setTotalCustomerReviews($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for TotalCustomerReviews');
        }
        $this->totalcustomerreviews = (int)$val;
    }

    /**
     * @param CustomerReviewArray $val
     * @throws Exception
     */
    public function setCustomerReviews($val)
    {
        $this->customerreviews = (int)$val;
    }
}
