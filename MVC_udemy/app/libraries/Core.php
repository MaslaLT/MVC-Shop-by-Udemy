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
    protected $parameters = [];



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


        $controllerUrl = '../app/controllers/' . $this->currentController. '.php';

        // Require the controller
        require_once $controllerUrl;

        // Instantiate controller class
        $this->currentController = new $this->currentController;

        // Check second index of $_GET['url']
        if(isset($url[1])){
            // Check if method exists in controller
           if(method_exists($this->currentController, $url[1])){
               $this->currentMethod = $url[1];

               // Unset index[1]
               unset($url[1]);
           }
        }

        // Get Parameters
        $this->parameters = $url ? array_values($url) : [];

        // Call controllers method and send parameters
        call_user_func_array([$this->currentController, $this->currentMethod], $this->parameters);

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

