<?php

    date_default_timezone_set("America/Los_Angeles");

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/book.php";

    session_start();

    if(empty($_SESSION["list_of_address"]))
    {
        $_SESSION["list_of_address"] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array("twig.path" => __DIR__."/../views"));

    $app["debug"] = true;








    return $app;


?>
