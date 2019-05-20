<?php
/**
 * Created by PhpStorm.
 * User: minht
 * Date: 2/9/2018
 * Time: 16:31
 */

namespace IDisT;
use IDisT\UrlInfo;

/**
 * Class Url_Helpers
 * @package IDisT\Url_Helper
 */
class UrlHelper
{
    /**
     * @var UrlInfo
     */
    public $info;

    /**
     * Url_Helper constructor.
     * @param $url
     */
    public function __construct()
    {

    }

    /**
     * @param $url
     * @return bool
     */
    public function checkUrl($url)
    {
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            return true;
        } else return false;
    }

    /**
     * @param $url
     * @param $path
     * @return string
     */
    public function connect($url, $path)
    {
        if ($path[0] == "/") {
            $current_path = parse_url($url, PHP_URL_PATH);
            $position = strpos($url, $current_path);
            if ($position > 1) {
                $url = substr($url, 0, $position);
            }

        }else{
            if ($url[strlen($url) - 1] != "/") {
                $url .= "/";
            }
        }

        return $url . $path;
    }

    /**
     * @param $url
     * @return URL_Info
     */
    public function getInfo($url)
    {
        $info = new UrlInfo();
        if ($this->checkUrl($url)) {
            $info->setProtocol(parse_url($url, PHP_URL_SCHEME));
            $info->setPort(parse_url($url, PHP_URL_PORT) ? parse_url($url, PHP_URL_PORT) : 80);
            $info->setDomain(parse_url($url, PHP_URL_HOST));
            $info->setUrl($url);

        }
        return $info;
    }
}
