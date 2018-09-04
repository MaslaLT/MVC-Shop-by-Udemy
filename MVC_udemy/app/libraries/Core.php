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
        $url = $this->getUrl();

        //Look in app/controllers for controller from
        //first $_GET['url'] array index.
        if(file_exists('../app/controllers/'. ucfirst($url[0]). '.php')){
            //If exists, set as current
            $this->currentController = ucfirst($url[0]);
            //unset 0 index
            unset($url[0]);
        }

        // Require the controller
        require_once '../app/controllers/' . $this->currentController. '.php';

        // Instatiant controller class
        $this->currentController = new $this->currentController;

        // Check second index of $_GET['url'] for class methods
        if
    }


    public function getUrl(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }

        return false;
    }
}

