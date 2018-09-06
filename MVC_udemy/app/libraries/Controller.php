<?php
/**
 * Base Controller
 * Loads the models and view
 *
 * Created by PhpStorm.
 * User: lazeris
 * Date: 31/08/2018
 * Time: 10:02
 */

class Controller
{
    /**
     * @param $model
     * @return mixed
     */
    public function model($model)
    {
        $modelUrl = '../app/models/'. $model. '.php';
        require_once ($modelUrl);

        return new $model();
    }

    /**
     * @param $view
     * @param array $data
     */
    public function view($view, $data = [])
    {
        $viewUrl = '../app/views/'. $view. '.phtml';

        if(file_exists($viewUrl)){
            require_once ($viewUrl);
        } else {
            die('View dos not exists');
        }
    }
}
