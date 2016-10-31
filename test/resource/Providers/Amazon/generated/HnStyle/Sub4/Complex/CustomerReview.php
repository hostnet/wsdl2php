<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class CustomerReview
{
    /**
     * @var string
     */
    public $rating;
    /**
     * @var string
     */
    public $summary;
    /**
     * @var string
     */
    public $comment;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setRating($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Rating');
        }
        $this->rating = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSummary($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Summary');
        }
        $this->summary = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setComment($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Comment');
        }
        $this->comment = (int)$val;
    }
}
