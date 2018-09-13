<?php
/**
 * Created by PhpStorm.
 * User: lazeris
 * Date: 12/09/2018
 * Time: 19:39
 */

class Users extends Controller
{
    public function __construct()
    {

    }

    public function register()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Process form
        } else {
            // Auto fill form after incorrect input.
            $data=[
                'title' => 'Register new user. Artur Masel portfolio site',
                'name' => '',
                'email' => '',
                'password' => '',
                'confirm_password' => '',
                'error_name' => '',
                'error_email' => '',
                'error_password' => '',
                'error_confirm_password' => '',
            ];

            // Load view template
            $this->view('users/register', $data);
        }
    }

    public function login()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Process login
            echo 'LOGGING IN';
        } else {
            // Auto fill form after incorrect input.
            $data=[
                'title' => 'Log in. Artur Masel portfolio site',
                'email' => '',
                'password' => '',
                'error_email' => '',
                'error_password' => '',
            ];

            // Load view template
            $this->view('users/login', $data);
        }
    }
}