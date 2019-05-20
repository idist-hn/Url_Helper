<?php
/**
 * Created by PhpStorm.
 * User: minht
 * Date: 2/13/2018
 * Time: 19:02
 */
namespace IDisT;
/**
 * Class URL_Info
 * @package IDisT\Url_Helper
 */
class UrlInfo
{
    /**
     * @var null
     */
    private $url = null;
    /**
     * @var null
     */
    private $protocol = null;
    /**
     * @var null
     */
    private $port = null;
    /**
     * @var null
     */
    private $domain = null;

    /**
     * URL_Info constructor.
     * @param null $url
     */
    public function __construct()
    {
    }

    /**
     * @return null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param null $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return null
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * @param null $protocol
     */
    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;
    }

    /**
     * @return null
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param null $port
     */
    public function setPort($port)
    {
        $this->port = $port;
    }

    /**
     * @return null
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param null $domain
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
    }

}