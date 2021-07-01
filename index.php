<?php

require_once __DIR__ . "/autoload.php";

use App\Models\Article;
use App\Models\User;

$data = Article::findAll();
$user = User::findAll();
var_dump($data);
var_dump($user);