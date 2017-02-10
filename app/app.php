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


    $app->get("/" , function() use ($app)
    {
        return $app["twig"]->render("create_new_address.html.twig" , array("create_address"=>Book::getAll()));
    });

    $app->post("/create_new" , function() use ($app)
    {
        $new_created_address = new Book($_POST["name"] , $_POST["address"]);
        $new_created_address -> save();
        return $app["twig"]->render("display_created_address.html.twig" , array("new_address_display" => $new_created_address));
    });

    $app->post("/deleteAll" , function() use ($app)
    {
        Book::deleteAll();
        return $app["twig"]->render("create_new_address.html.twig" , array("create_address" => Book::getAll()));
    });





    return $app;


?>
