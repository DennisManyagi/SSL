<?php

require_once "Facebook/autoload.php";

$FB = new \Facebook\Facebook([
    'app_id' => '917240965289456',
    'app_secret' => 'fc8ce02985df4ee0b941481a2ffe4327',
    'default_graph_version' => 'v2.10'

    ]);


$helper = $FB->getRedirectLoginHelper();

$config = array(
'defaultController' => 'welcome',
'dbname' => 'fruits',
'dbpass' => 'root',
'dbuser' =>'root',
'baseurl' => 'http://127.0.0.1'
);


$str=$config["baseurl"]."/".$_SERVER['REQUEST_URI'];

//var_dump($str);
//cnn.com/mike


///var_dump($_SERVER['REQUEST_URI']);

$urlPathParts = explode('/', ltrim(parse_url($str,  PHP_URL_PATH), '/'));




include 'router.php';

$route = new router($urlPathParts,$config);


?>