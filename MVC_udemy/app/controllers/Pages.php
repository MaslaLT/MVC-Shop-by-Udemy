<?php
/**
 * Created by PhpStorm.
 * User: lazeris
 * Date: 04/09/2018
 * Time: 11:13
 */

class Pages extends Controller
{
    public function about()
    {
        $this->view('pages/about');
    }

    public function index()
    {
        $data =[
            'title' => 'Main page'
        ];

        $this->view('pages/index', $data);
    }
}

