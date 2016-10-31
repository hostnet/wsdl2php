<?php

namespace Controle;
class Reviews {
    /**
     * @var string
     */
    public $AvgCustomerRating;
    /**
     * @var string
     */
    public $TotalCustomerReviews;
    /**
     * @var \Controle\CustomerReviewArray
     */
    public $CustomerReviews;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setAvgCustomerRating($val) {
        if(!is_string($val)) throw new Exception('POJO Proxy need a string for AvgCustomerRating');
        $this->AvgCustomerRating = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setTotalCustomerReviews($val) {
        if(!is_string($val)) throw new Exception('POJO Proxy need a string for TotalCustomerReviews');
        $this->TotalCustomerReviews = (int)$val;
    }

    /**
     * @param CustomerReviewArray $val
     * @throws Exception
     */
    public function setCustomerReviews($val) {
        
        $this->CustomerReviews = (int)$val;
    }

}

