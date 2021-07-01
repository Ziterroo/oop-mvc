<?php

spl_autoload_register(function ($class){
   $path = str_replace('\\', '/', $class) . '.php';
    require __DIR__ . '/' . $path;
});