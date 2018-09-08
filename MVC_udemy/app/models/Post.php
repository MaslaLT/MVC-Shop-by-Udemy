<?php
/**
 * Created by PhpStorm.
 * User: lazeris
 * Date: 08/09/2018
 * Time: 09:59
 */

class Post
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
}