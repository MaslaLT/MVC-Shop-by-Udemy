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

    public function getUrl(){
        echo($_GET['url']);
    }
}

