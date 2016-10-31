<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class ResultElement
{
    /**
     * @var string
     */
    public $summary;
    /**
     * @var string
     */
    public $url;
    /**
     * @var string
     */
    public $snippet;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $cachedsize;
    /**
     * @var boolean
     */
    public $relatedinformationpresent;
    /**
     * @var string
     */
    public $hostname;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DirectoryCategory
     */
    public $directorycategory;
    /**
     * @var string
     */
    public $directorytitle;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setSummary($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for summary');
        }
        $this->summary = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setURL($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for URL');
        }
        $this->url = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSnippet($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for snippet');
        }
        $this->snippet = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setTitle($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for title');
        }
        $this->title = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCachedSize($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for cachedSize');
        }
        $this->cachedsize = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setRelatedInformationPresent($val)
    {
        $this->relatedinformationpresent = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setHostName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for hostName');
        }
        $this->hostname = (int)$val;
    }

    /**
     * @param DirectoryCategory $val
     * @throws Exception
     */
    public function setDirectoryCategory($val)
    {
        $this->directorycategory = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setDirectoryTitle($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for directoryTitle');
        }
        $this->directorytitle = (int)$val;
    }
}
