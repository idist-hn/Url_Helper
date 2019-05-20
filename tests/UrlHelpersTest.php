<?php
/**
 * Created by PhpStorm.
 * User: minht
 * Date: 2/10/2018
 * Time: 17:39
 */

use IDisT\UrlHelpers;

use PHPUnit\Framework\TestCase;

class UrlHelpersTest extends TestCase
{
    public function testCheck_Url()
    {
        $url = "https://google.com.vn";
        $url_helper = new UrlHelpers();
        $this->assertTrue($url_helper->check_Url($url), "$url is ok");
        $url = "https:w.w3schools.com";
        $this->assertFalse($url_helper->check_Url($url), "$url is not ok");
    }

    public function testConnect_Url()
    {
        $url = "https://google.com.vn";
        $url_helper = new UrlHelpers();
        $this->assertStringMatchesFormat($url_helper->connect($url, "a/b.html"), "https://google.com.vn/a/b.html", "connect 1 is done");
        $url = "https://google.com.vn/c/d/e.html";
        $this->assertStringMatchesFormat($url_helper->connect($url, "/a/b.html"), "https://google.com.vn/a/b.html", "connect 2 is done");
    }

    public function testGet_Info()
    {
        $url = "https://google.com.vn";
        $url_helper = new UrlHelpers();
        $this->assertObjectHasAttribute("domain", $url_helper->get_info($url, "https://google.com.vn/a/b.html"), "domain is done");
        $this->assertObjectHasAttribute("port", $url_helper->get_info($url, "https://google.com.vn/a/b.html"), "port is done");
        $this->assertObjectHasAttribute("protocol", $url_helper->get_info($url, "https://google.com.vn/a/b.html"), "protocol is done");
    }
}