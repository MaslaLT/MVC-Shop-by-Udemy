<?php
/**
 * Created by PhpStorm.
 * User: lazeris
 * Date: 31/08/2018
 * Time: 10:00
 *
 * App Core Class
 * Creats URLS & loads core Controller
 * URL FORMAT - /controller/method/parameters
 *
 */


class Core
{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct()
    {
        $this->getUrl();
    }

    public function getUrl()
    {
        if(isset($_GET['url'])){
            $url = $_GET['url'];
            $url = filter_var($url, FILTER_SANITIZE_URL);
            var_dump($url);
        }
    }
}

