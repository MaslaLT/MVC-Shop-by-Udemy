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
        $data =[
            'title' => 'About page',
            'description' => 'I am php junior developer. This site is made to show what I can do using OOP PHP'
        ];

        $this->view('pages/about', $data);
    }

    public function index()
    {
        $data =[
            'title' => 'Developed by: Artur Masel',
            'description' => 'Firs MVC project. This is my portfolio site. 
                               Build using custom php Framework and Bootstrap'
        ];

        $this->view('pages/index', $data);
    }

}
