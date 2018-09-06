<?php
//Loading Config file
require_once 'config/config.php';

// Auto load core libraries
spl_autoload_register(function($classNeme){
    require_once 'libraries/' . $classNeme . '.php';
    var_dump($classNeme);
});
